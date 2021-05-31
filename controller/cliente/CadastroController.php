<?php
require_once(__DIR__."/../../model/cliente/clienteDAO.php");
require_once(__DIR__."/../../model/endereco/enderecoDAO.php");
class CadastroController{

    private $cliente;
    private $endereco;

    public function __construct(){
        $this->cliente = new Cliente();
        $this->endereco = new Endereco();
        $this->cadastro();
    }

    private function cadastro(){

        $this->endereco->setNumero($_POST['numero']);
        $this->endereco->setBairro($_POST['bairro']);
        $this->endereco->setCidade($_POST['cidade']);
        $this->endereco->setUF($_POST['uf']);
        $this->endereco->setComplemento($_POST['complemento']);

        $id_endereco = $this->endereco->incluir($_POST['numero'], $_POST['bairro'], $_POST['cidade'], $_POST['uf'], $_POST['complemento']);

        $this->cliente->setEmail($_POST['email']);
        $this->cliente->setNome($_POST['nome']);
        $this->cliente->setTelefone($_POST['telefone']);
        $this->cliente->setEndereco($id_endereco);
        $this->cliente->setSenha($_POST['senha']);
        $result = $this->cliente->incluir();

        if($result >= 1){
            echo "<script>alert('Cadastro incluído com sucesso!');document.location='../../view/clientes.php'</script>";
        }else{
            echo "<script>alert('Erro ao cadastrar o usuario!');history.back()</script>";
        }
    }
}
// new CadastroController($_GET['campo']);      // se for um controller que precisa de parametros
new CadastroController();

?>
