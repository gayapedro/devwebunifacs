<?php
require_once(__DIR__."/../../model/cliente/clienteDAO.php");
require_once(__DIR__."/../../model/endereco/enderecoDAO.php");
require_once(__DIR__."/../../utils.php");
class CadastroController{

    private $cliente;
    private $endereco;

    public function __construct(){
        $this->cliente = new Cliente();
        $this->endereco = new Endereco();
        $this->cadastro();
    }

    private function cadastro(){

        $this->endereco->setCEP($_POST['cep']);
        $this->endereco->setLogradouro($_POST['logradouro']);
        $this->endereco->setNumero($_POST['numero']);
        $this->endereco->setCidade($_POST['cidade']);
        $this->endereco->setUF($_POST['estado']);
        $this->endereco->setComplemento($_POST['complemento']);

        $id_endereco = $this->endereco->incluir($_POST['numero'], $_POST['cidade'], $_POST['estado'], $_POST['complemento'], $_POST['cep'], $_POST['logradouro']);

        $this->cliente->setEmail($_POST['email']);
        $this->cliente->setNome($_POST['nome']);
        $this->cliente->setCPF($_POST['cpf']);
        $this->cliente->setTelefone($_POST['telefone']);
        $this->cliente->setEndereco($id_endereco);
        $this->cliente->setSenha($_POST['senha']);
        $result = $this->cliente->incluir();

        if($result >= 1){
            echo "<script>alert('Cadastro incluído com sucesso!');document.location='../../view/login.php'</script>";
        }else{
            echo "<script>alert('Erro ao cadastrar o usuario!');history.back()</script>";
        }
    }
}
// new CadastroController($_GET['campo']);      // se for um controller que precisa de parametros
new CadastroController();

?>
