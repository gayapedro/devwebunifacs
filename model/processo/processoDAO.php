<?php

require_once(__DIR__."/../../init.php");
require_once(__DIR__."/../../utils.php");

class ProcessoDAO{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function initProcesses($idCompra){

        $id = guidv4();
        $status = "doing";
        $stage = "inicial";
        $idResp = "88b9b912-6f67-465b-868f-0e0e708212c1";
        $ordem = 1;
        $stmt = $this->mysqli->prepare("INSERT INTO processos (`id`, `id_compra`, `status`, `stage`, `id_responsavel`, `ordem`, `created_at`, `updated_at`) VALUES (?,?,?,?,?,?, now(), now())");
        $stmt->bind_param("sssssi",$id, $idCompra, $status, $stage, $idResp, $ordem);
        $stmt->execute();

        $id = guidv4();
        $status = "waiting";
        $stage = "preparação";
        $ordem = 2;
        $stmt = $this->mysqli->prepare("INSERT INTO processos (`id`, `id_compra`, `status`, `stage`, `id_responsavel`, `ordem`, `created_at`, `updated_at`) VALUES (?,?,?,?,?,?, now(), now())");
        $stmt->bind_param("sssssi",$id, $idCompra, $status, $stage, $idResp, $ordem);
        $stmt->execute();

        $id = guidv4();
        $status = "waiting";
        $stage = "embalagem";
        $ordem = 3;
        $stmt = $this->mysqli->prepare("INSERT INTO processos (`id`, `id_compra`, `status`, `stage`, `id_responsavel`, `ordem`, `created_at`, `updated_at`) VALUES (?,?,?,?,?,?, now(), now())");
        $stmt->bind_param("sssssi",$id, $idCompra, $status, $stage, $idResp, $ordem);
        $stmt->execute();

        $id = guidv4();
        $status = "waiting";
        $stage = "entrega";
        $ordem = 4;
        $stmt = $this->mysqli->prepare("INSERT INTO processos (`id`, `id_compra`, `status`, `stage`, `id_responsavel`, `ordem`, `created_at`, `updated_at`) VALUES (?,?,?,?,?,?, now(), now())");
        $stmt->bind_param("sssssi",$id, $idCompra, $status, $stage, $idResp, $ordem);
        $stmt->execute();

        return true;

    }

    public function alterProcess($idCompra, $stage, $status) {
        $sql = "UPDATE processos SET status = '$status', updated_at = NOW() WHERE id_compra = '$idCompra' AND stage = '$stage'";
        return $this->mysqli->query($sql);
    }

    public function fetchProcessos($idCompra) {
        $sql = "SELECT * FROM processos WHERE id_compra = '$idCompra' ORDER BY ordem ASC";
        $result = $this->mysqli->query($sql);

        $array = [];
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }

        return $array;
    }

}
?>
