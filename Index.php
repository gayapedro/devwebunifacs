<?php
    session_start();

	if (isset($_GET['url'])) {
		$url =  strtoupper($_GET['url']);

		require "controller/produto/categoriasController.php";
		$categoriasController = new CategoriasController();
		$categoriasList = $categoriasController->getCategorias();

		switch ($url){
			case "HOME":
				require "controller/home/initController.php";
				$controlador = new HomeInitController();
				$controlador->processaRequisicao();
			 	break;
			case "PRODUTOS" || in_array($url, $categoriasList):
				$categoria = "";
				if($url != 'PRODUTOS'){
					$categoria = strtolower($url);
				}
				require "controller/produto/initController.php";
				$controlador = new ProdutoInitController();
				$controlador->processaRequisicao($categoria);
				break;
			case "LOGIN":
				require "controller/cliente/loginController.php";
				$controlador = new LoginController();
				$controlador->processaRequisicao();
				break;
			case "CADASTRO":
				require "controller/cliente/cadastroController.php";
				$controlador = new cadastroController();
				$controlador->processaRequisicao();
				break;
			case "CONTA":
				require "controller/cliente/InfoContaController.php";
				$controlador = new InfoContaController();
				$controlador->processaRequisicao();
				break;
			// case "ADDITEMCARRINHO":
			// 	require "Controller/ControladorAddItemCarrinho.php";
			// 	require_once 'Model/CarrinhoSession.php';
			// 	$carrinhoSession = new CarrinhoSession();
			// 	$controlador = new ControladorAddItemCarrinho($carrinhoSession);
			// 	$controlador->processaRequisicao();
			// 	break;
			// case "CARRINHO":
			// 	require "Controller/ControladorListaCarrinho.php";
			// 	$controlador = new ControladorListaCarrinho();
			// 	$controlador->processaRequisicao();
			// 	break;
			// case "CARRINHOALTQUANT":
			// 	require "Controller/ControladorAlteraQuantCarrinho.php";
			// 	require_once 'Model/CarrinhoSession.php';
			// 	$carrinhoSession = new CarrinhoSession();
			// 	$controlador = new ControladorAlteraQuantCarrinho($carrinhoSession);
			// 	$controlador->processaRequisicao();
			// 	break;
			// case "APAGAITEMCARRINHO":
			// 	require "Controller/ControladorApagaItemCarrinho.php";
			// 	require_once 'Model/CarrinhoSession.php';
			// 	$carrinhoSession = new CarrinhoSession();
			// 	$controlador = new ControladorApagaItemCarrinho($carrinhoSession);
			// 	$controlador->processaRequisicao();
			// 	break;
			default:
				require "controller/home/InitController.php";
				$controlador = new HomeInitController();
				$controlador->processaRequisicao();
				break;
		}
	} else {
		$url = '404.php';
	}
?>