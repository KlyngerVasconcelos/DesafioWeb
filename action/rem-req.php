<?php
	require_once ('../model/Requisitante.php');
	require_once ('../bd/Remover.php');
	session_start();

	$requisitante = new Requisitante();
	
	$codigo_requisitante = $_GET['codr'];

	$requisitante->setCodigo_requisitante($codigo_requisitante);

	$codigo_requisitante = $requisitante->getCodigo_requisitante();
	
	$result = removerRequisitante($codigo_requisitante);
	if ($result == 1){
		echo ("<script>alert('Requisitante removido com exito!');	location.href='../view/visualizar-req.php';</script>");
	}else{
		echo ("<script>alert('Ops! Requisitante não foi removido!');	location.href='../view/visualizar-req.php';</script>");
	}
?>