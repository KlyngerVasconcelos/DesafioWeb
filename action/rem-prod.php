<?php
	require_once ('../model/Produtos.php');
	require_once ('../bd/Remover.php');
	session_start();

	$produtos = new Produtos();
	
	$codigo_produto = $_GET['codp'];

	$produtos->setCodigo_produto($codigo_produto);

	$codigo_produto = $produtos->getCodigo_produto();
	
	$result = removerProduto($codigo_produto);
	if ($result == 1){
		echo ("<script>alert('Produto removido com exito!');	location.href='../view/visualizar-prod.php';</script>");
	}else{
		echo ("<script>alert('Ops! Produto não foi removido!');	location.href='../view/visualizar-prod.php';</script>");
	}
?>