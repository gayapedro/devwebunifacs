<?php

require_once(__DIR__."/../../init.php");
require_once(__DIR__."/../../utils.php");

class EnderecoModel{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setEndereco($numero, $bairro, $cidade, $uf, $complemento){

        $id = guidv4();

        $stmt = $this->mysqli->prepare("INSERT INTO enderecos (`id`, `numero`, `bairro`, `cidade`, `uf`, `complemento`) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("sissss",$id, $numero, $bairro, $cidade, $uf, $complemento);

        if ($stmt->execute()) {
            return $id;
        } else {
            return "";
        }
    }

    public function getEnderecoById($id){
        $stmt = $this->mysqli->prepare("SELECT * FROM enderecos WHERE 'id' = ?");
        $stmt->bind_param("s", $id);
        $result = $stmt->execute();
        $array = [];
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }
}
?>
