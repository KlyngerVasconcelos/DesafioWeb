<?php
	require_once ('../model/Requisitante.php');
	require_once ('../bd/Alterar.php');
	session_start();

	$requisitante = new Requisitante();
	
	$codigo_requisitante = $_POST['tCpdigo'];
	$nome = $_POST['tNome'];
	$local = $_POST['tLocal'];
	$departamento = $_POST['tDepartamento'];
	$mensagem = $_POST['tMsg'];

	$requisitante->setCodigo_requisitante($codigo_requisitante);
	$requisitante->setNome($nome);
	$requisitante->setLocal($local);
	$requisitante->setDepartamento($departamento);
	$requisitante->setMensagem($mensagem);

	$codigo_requisitante = $requisitante->getCodigo_requisitante();
	$nome = $requisitante->getNome();
	$local = $requisitante->getLocal();
	$departamento = $requisitante->getDepartamento();
	$mensagem = $requisitante->getMensagem();
	
	$resultado = atualizarRequisitante($codigo_requisitante,$nome,$local,$departamento,$mensagem);
	if ($resultado == 1){
		echo ("<script>alert('Requisitante atualizado com exito!');	location.href='../view/visualizar-req.php';</script>");
	}else{
		echo ("<script>alert('Ops! Não foi possível Requisitante.');	location.href='../view/visualizar-req.php';</script>");
	}
?>