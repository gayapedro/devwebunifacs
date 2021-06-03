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
			case "LOGOUT":

				if (!isset($_COOKIE['token'])) {
					header('Location:home', true,302);
				}

				require "controller/cliente/LogoutController.php";
				$controlador = new LogoutController();
				$controlador->processaRequisicao();
				break;
			default:
				if (in_array(strtolower($url), $categoriasList)) {
					require "controller/produto/initController.php";
					$controlador = new ProdutoInitController();
					$controlador->processaRequisicao(strtolower($url));
				} else {
					require "controller/home/InitController.php";
					$controlador = new HomeInitController();
					$controlador->processaRequisicao();
				}
				break;
		}
	} else {
		$url = '404.php';
	}
?>