<?php
require_once(__DIR__."/../../model/cliente/clienteDAO.php");
class ListaController{

    private $lista;

    public function __construct(){
        $this->lista = new Cliente();
        $this->criarTabela();

    }

    private function criarTabela(){
        $row = $this->lista->getClientes();
        foreach ($row as $value){
            echo "<tr>";
            echo "<th>".$value['nome'] ."</th>";
            echo "<td>".$value['endereco'] ."</td>";
            echo "<td>".$value['data_nascimento'] ."</td>";
            echo "</tr>";
        }
    }
}

?>