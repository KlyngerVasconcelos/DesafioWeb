<?php
	require_once ('../model/Fornecedores.php');
	require_once ('../bd/Alterar.php');
	session_start();

	$fornecedores = new Fornecedores();
	
	$cnpj = $_POST['tCNPJ'];
	$fantasia = $_POST['tNomeFantasia'];
	$estado = $_POST['tEstado'];
	$cidade = $_POST['tCidade'];
	$endereco = $_POST['tEndereco'];
	$contato = $_POST['tTelefone1'];
	$banco = $_POST['tBanco'];
	$agencia = $_POST['tAgencia'];
	$conta = $_POST['tConta'];
	$email = $_POST['tEmail'];
	$site = $_POST['tSite'];
	$mensagem = $_POST['tMsg'];

	$fornecedores->setCnpj($cnpj);
	$fornecedores->setFantasia($fantasia);
	$fornecedores->setEstado($estado);
	$fornecedores->setCidade($cidade);
	$fornecedores->setEndereco($endereco);
	$fornecedores->setContato($contato);
	$fornecedores->setBanco($banco);
	$fornecedores->setAgencia($agencia);
	$fornecedores->setConta($conta);
	$fornecedores->setEmail($email);
	$fornecedores->setSite($site);
	$fornecedores->setMensagem($mensagem);

	$cnpj = $fornecedores->getCnpj();
	$fantasia = $fornecedores->getFantasia();
	$estado = $fornecedores->getEstado();
	$cidade = $fornecedores->getCidade();
	$endereco = $fornecedores->getEndereco();
	$contato = $fornecedores->getContato();
	$banco = $fornecedores->getBanco();
	$agencia = $fornecedores->getAgencia();
	$conta = $fornecedores->getConta();
	$email = $fornecedores->getEmail();
	$site = $fornecedores->getSite();
	$mensagem = $fornecedores->getMensagem();
	
	$resultado = atualizarFornecedor($cnpj,$fantasia,$estado,$cidade,$endereco,$contato,$banco,$agencia,$conta,$email,$site,$mensagem);
	if ($resultado == 1){
		echo ("<script>alert('Fornecedor atualizado com exito!');	location.href='../view/visualizar-forn.php';</script>");
	}else{
		echo ("<script>alert('Ops! Não foi possível atualizar.');	location.href='../view/visualizar-forn.php';</script>");
	}
?>