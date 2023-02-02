<?php
	require_once ('../model/Fornecedores.php');
	require_once ('../bd/Remover.php');
	session_start();

	$fornecedores = new Fornecedores();
	
	$cnpj = $_GET['codf'];

	$fornecedores->setCnpj($cnpj);

	$cnpj = $fornecedores->getCnpj();
	
	$result = removerFornecedor($cnpj);
	if ($result == 1){
		echo ("<script>alert('Fornecedor removido com exito!');	location.href='../view/visualizar-forn.php';</script>");
	}else{
		echo ("<script>alert('Ops! Fornecedor não foi removido!');	location.href='../view/visualizar-forn.php';</script>");
	}
?>