<?php

	if (isset($_GET['url'])) {
		$url =  strtoupper($_GET['url']);

		require "controller/produto/categoriasController.php";
		$categoriasController = new CategoriasController();
		$categoriasList = $categoriasController->getCategoriasNormalized();

		switch ($url){
			case "HOME":
				require "controller/home/initController.php";
				$controlador = new HomeInitController();
				$controlador->processaRequisicao();
			 	break;
			case "PRODUTOS":
				require "controller/produto/initController.php";
				$controlador = new ProdutoInitController();
				$controlador->processaRequisicao("");
				break;
			case "LOGIN":

				if (isset($_COOKIE['token'])) {
					header('Location:home', true,302);
				}

				require "controller/cliente/loginController.php";
				$controlador = new LoginController();
				$controlador->processaRequisicao();
				break;
			case "SIGNIN":
				require "controller/cliente/loginController.php";
				$controlador = new LoginController();
				$controlador->login();
				break;
			case "SIGNUP":
				require "controller/cliente/CadastroController.php";
				$controlador = new CadastroController();
				$controlador->cadastro();
				break;
			case "CADASTRO":
				require "controller/cliente/cadastroController.php";
				$controlador = new cadastroController();
				$controlador->processaRequisicao();
				break;
			case "CONTA":

				if (!isset($_COOKIE['token'])) {
					header('Location:home', true,302);
				}

				require "controller/cliente/InfoContaController.php";
				$controlador = new InfoContaController();
				$controlador->processaRequisicao();
				break;
			case "CARRINHO":

				if (!isset($_COOKIE['token'])) {
					header('Location:home', true,302);
				}

				require "controller/carrinho/CarrinhoController.php";
				$controlador = new CarrinhoController();
				$controlador->processaRequisicao();
				break;

			case "ENDERECO":

				if (!isset($_COOKIE['token'])) {
					header('Location:home', true,302);
				}

				require "controller/endereco/EnderecoController.php";
				$controlador = new EnderecoController();
				$controlador->processaRequisicao();
				break;
			case "LOGOUT":

				if (!isset($_COOKIE['token'])) {
					header('Location:home', true,302);
				}

				require "controller/cliente/LogoutController.php";
				$controlador = new LogoutController();
				$controlador->processaRequisicao();
				break;
			case "PAGAMENTO":

				if (!isset($_COOKIE['token'])) {
					header('Location:home', true,302);
				}
 
				require "controller/pagamento/PagamentoController.php";
				$controlador = new PagamentoController();
				$controlador->processaRequisicao();
				break;
			case "CONFIRMACAO":

				if (!isset($_COOKIE['token'])) {
					header('Location:home', true,302);
				}

				require "controller/confirmacao/ConfirmacaoController.php";
				$controlador = new ConfirmacaoController();
				$controlador->processaRequisicao();
				break;
			case "ADDITEM":

				if (!isset($_COOKIE['token'])) {
					header('Location:home', true,302);
				}

				require "controller/carrinho/AddItemController.php";
				$controlador = new AddItemController();
				$controlador->addItem();
				break;
			case "DETALHEPEDIDO":

				if (!isset($_COOKIE['token'])) {
					header('Location:home', true,302);
				}

				require "controller/compra/CompraController.php";
				$controlador = new CompraController();
				$controlador->getCompraInfo();
				break;
			case "RATE":

				if (!isset($_COOKIE['token'])) {
					header('Location:home', true,302);
				}

				require "controller/compra/CompraController.php";
				$controlador = new CompraController();
				$controlador->rate();
				break;
			case "RECOMPRA":

				if (!isset($_COOKIE['token'])) {
					header('Location:home', true,302);
				}
				$host = $_SERVER['HTTP_HOST'];
				$path = $_SERVER['REQUEST_URI'];
				$urlCompleta = "http://$host$path";

				$url_components = parse_url($urlCompleta);
				parse_str($url_components['query'], $params);

				require "controller/compra/RecompraController.php";
				$controlador = new RecompraController();
				$controlador->recompra($params['id']);
				break;
			case "ALTERITEM":

				if (!isset($_COOKIE['token'])) {
					header('Location:home', true,302);
				}

				$host = $_SERVER['HTTP_HOST'];
				$path = $_SERVER['REQUEST_URI'];
				$urlCompleta = "http://$host$path";

				$url_components = parse_url($urlCompleta);
				parse_str($url_components['query'], $params);

				if (isset($params)) {
					require "controller/carrinho/AlterItemController.php";
					$controlador = new AlterItemController();
					$controlador->alterItem($params['id'], $params['cantidad']);
				}
				break;

			case "REMOVEITEM":

				if (!isset($_COOKIE['token'])) {
					header('Location:home', true,302);
				}

				$host = $_SERVER['HTTP_HOST'];
				$path = $_SERVER['REQUEST_URI'];
				$urlCompleta = "http://$host$path";

				$url_components = parse_url($urlCompleta);
				parse_str($url_components['query'], $params);

				if (isset($params)) {
					require "controller/carrinho/RemoveItemController.php";
					$controlador = new RemoveItemController();
					$controlador->removeItem($params['id']);
				}
				break;
			default:
				if (in_array(strtolower($url), $categoriasList)) {
					require "controller/produto/initController.php";
					$controlador = new ProdutoInitController();
					$controlador->processaRequisicao(strtolower($url));
				} else {
					header('Location:404.php', true,302);
				}
				break;
		}
	} else {
		$url = '404.php';
	}
?>