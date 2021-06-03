<?php

require_once(__DIR__."/../../init.php");
require_once(__DIR__."/../../utils.php");
class SessionDAO{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function createSession($idCliente, $token){

        $id = guidv4();
        $status = "active";

        $stmt = $this->mysqli->prepare("INSERT INTO sessions (`id`, `id_cliente`, `token`, `status`, `created_at`) VALUES (?,?,?,?,now())");
        $stmt->bind_param("ssss",$id, $idCliente, $token, $status);

        return $stmt->execute();

    }

    public function expireSession($token){

        $stmt = $this->mysqli->prepare("UPDATE sessions SET status = 'expired' WHERE token = ?");
        $stmt->bind_param("s", $token);

        return $stmt->execute();
    }

    public function getClienteId($token) {

        $sql = "SELECT id_cliente FROM sessions WHERE token = '$token' AND status = 'active'";
        $result = $this->mysqli->query($sql);

        $array = [];
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }

        return $array[0]['id_cliente'];

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
