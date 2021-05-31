<?php

require_once(__DIR__."/../../init.php");
require_once(__DIR__."/../../utils.php");
class SessionModel{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function createSession($idCliente, $token){

        $id = guidv4();

        $stmt = $this->mysqli->prepare("INSERT INTO sessions (`id`, `id_cliente`, `token`, `created_at`) VALUES (?,?,?,now())");
        $stmt->bind_param("sss",$id, $idCliente, $token);

        return $stmt->execute();

    }

    public function validateSession($idCliente, $token) {

        $sql = "SELECT * FROM sessions WHERE id_cliente = '$idCliente' AND token = '$token' ORDER BY created_at DESC";
        $result = $this->mysqli->query($sql);

        if (!$result){
            return false;
        }

        $row = $result->fetch_assoc();

        $date1 = new DateTime($row['created_at']);
        $date2 = new DateTime('NOW');
        $days  = $date2->diff($date1)->format('%a');


        if ($days >= 1) {
            return false;
        }

        return true;

    }
}
?>
