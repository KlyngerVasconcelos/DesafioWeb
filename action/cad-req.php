<?php
	require_once ('../model/Requisitante.php');
	require_once ('../bd/Cadastrar.php');
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
	
	$resultado = cadastrarRequisitante($codigo_requisitante,$nome,$local,$departamento,$mensagem);
	if ($resultado == 1){
		echo ("<script>alert('Requisitante cadastrado com exito!');	location.href='../view/visualizar-req.php';</script>");
	}else{
		echo ("<script>alert('Codigo do requisitante já se encontra cadastrado!');	location.href='../view/cadastrar-req.php';</script>");
	}
?>