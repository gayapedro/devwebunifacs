<?php

require_once(__DIR__."/../../init.php");
require_once(__DIR__."/../../utils.php");
require_once("produtoModel.php");

class ProdutoDAO{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function getProdutosDesc(){

        $sql = "SELECT * FROM produtos WHERE desconto > 0";
        $result = $this->mysqli->query($sql);

        $array = [];
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }

        return $array;
    }

    public function getCategoriasList(){

        $sql = "SELECT DISTINCT(categoria) FROM produtos";
        $result = $this->mysqli->query($sql);

        $array = [];
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }

        return $array;
    }

    public function getProdutosPorCategoria($categoria){

        $sql = "SELECT * FROM produtos";

        if ($categoria) {
            $sql = "SELECT * FROM produtos WHERE categoria = '$categoria'";
        }

        $result = $this->mysqli->query($sql);

        $array = [];
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }

        return $array;
    }
}
?>
