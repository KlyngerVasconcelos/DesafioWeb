<?php
	require_once ('../model/Fornecedores.php');
	require_once ('../bd/Cadastrar.php');
	session_start();

	$fornecedores = new Fornecedores();
	
	$cnpj = $_POST['tCNPJ'];
	$razao = $_POST['tRazao'];
	$fantasia = $_POST['tNomeFantasia'];
	$estado = $_POST['tEstado'];
	$cidade = $_POST['tCidade'];
	$endereco = $_POST['tEndereco'];
	$contato = $_POST['tTelefone1'];
	$banco = $_POST['tBanco'];
	$agencia = $_POST['tAgencia'];
	$conta = $_POST['tConta'];
	$data = $_POST['tDataCadastramento'];
	$datacadastramento = date('d/m/Y',  strtotime($data));
	$email = $_POST['tEmail'];
	$site = $_POST['tSite'];
	$mensagem = $_POST['tMsg'];

	$fornecedores->setCnpj($cnpj);
	$fornecedores->setRazao($razao);
	$fornecedores->setFantasia($fantasia);
	$fornecedores->setEstado($estado);
	$fornecedores->setCidade($cidade);
	$fornecedores->setEndereco($endereco);
	$fornecedores->setContato($contato);
	$fornecedores->setBanco($banco);
	$fornecedores->setAgencia($agencia);
	$fornecedores->setConta($conta);
	$fornecedores->setDatacadastramento($datacadastramento);
	$fornecedores->setEmail($email);
	$fornecedores->setSite($site);
	$fornecedores->setMensagem($mensagem);

	$cnpj = $fornecedores->getCnpj();
	$razao = $fornecedores->getRazao();
	$fantasia = $fornecedores->getFantasia();
	$estado = $fornecedores->getEstado();
	$cidade = $fornecedores->getCidade();
	$endereco = $fornecedores->getEndereco();
	$contato = $fornecedores->getContato();
	$banco = $fornecedores->getBanco();
	$agencia = $fornecedores->getAgencia();
	$conta = $fornecedores->getConta();
	$datacadastramento = $fornecedores->getDatacadastramento();
	$email = $fornecedores->getEmail();
	$site = $fornecedores->getSite();
	$mensagem = $fornecedores->getMensagem();
	
	$resultado = cadastrarFornecedor($cnpj,$razao,$fantasia,$estado,$cidade,$endereco,$contato,$banco,$agencia,$conta,$datacadastramento,$email,$site,$mensagem);
	if ($resultado == 1){
		echo ("<script>alert('Fornecedor cadastrado com exito!');	location.href='../view/visualizar-forn.php';</script>");
	}else{
		echo ("<script>alert('CNPJ já se encontra cadastrado!');	location.href='../view/cadastrar-forn.php';</script>");
	}
?>