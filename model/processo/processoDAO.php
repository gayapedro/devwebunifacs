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
        $stmt = $this->mysqli->prepare("INSERT INTO processos (`id`, `id_compra`, `status`, `stage`, `id_responsavel`, `created_at`, `updated_at`) VALUES (?,?,?,?,?, now(), now())");
        $stmt->bind_param("sssss",$id, $idCompra, $status, $stage, $idResp);
        $stmt->execute();
        console_log($stmt->error);

        $id = guidv4();
        $status = "waiting";
        $stage = "preparação";
        $stmt = $this->mysqli->prepare("INSERT INTO processos (`id`, `id_compra`, `status`, `stage`, `id_responsavel`, `created_at`, `updated_at`) VALUES (?,?,?,?,?, now(), now())");
        $stmt->bind_param("sssss",$id, $idCompra, $status, $stage, $idResp);
        $stmt->execute();

        $id = guidv4();
        $status = "waiting";
        $stage = "embalagem";
        $stmt = $this->mysqli->prepare("INSERT INTO processos (`id`, `id_compra`, `status`, `stage`, `id_responsavel`, `created_at`, `updated_at`) VALUES (?,?,?,?,?, now(), now())");
        $stmt->bind_param("sssss",$id, $idCompra, $status, $stage, $idResp);
        $stmt->execute();

        $id = guidv4();
        $status = "waiting";
        $stage = "entrega";
        $stmt = $this->mysqli->prepare("INSERT INTO processos (`id`, `id_compra`, `status`, `stage`, `id_responsavel`, `created_at`, `updated_at`) VALUES (?,?,?,?,?, now(), now())");
        $stmt->bind_param("sssss",$id, $idCompra, $status, $stage, $idResp);
        $stmt->execute();

        return true;

    }

    public function alterProcess($idCompra, $stage, $status) {
        $sql = "UPDATE processos SET status = '$status', updated_at = NOW() WHERE id_compra = '$idCompra' AND stage = '$stage'";
        return $this->mysqli->query($sql);
    }

    public function fetchProcessos($idCompra) {
        $sql = "SELECT * FROM processos WHERE id_compra = '$idCompra' ORDER BY updated_at DESC";
        $result = $this->mysqli->query($sql);

        $array = [];
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }

        return $array;
    }

}
?>
