<?php
	require_once('../model/Usuario.php');
	require_once('Conexao.php');
	
	$conecta = new Conexao();
	$servidor = new usuario();
	session_start();
	
	$servidor->setCpf($_POST['cpf']);
	$servidor->setSenha($_POST['senha']);
	
	$cpf = $servidor->getCpf();
	$senha = $servidor->getSenha();
	
	$result = mysqli_query($conecta->conexao(),"SELECT * FROM usuario WHERE cpf='$cpf' AND senha = '$senha';");
	
	if(mysqli_num_rows($result) > 0){
		$dados_servidor = mysqli_fetch_array($result);
		$_SESSION['cpf'] = $cpf;
		$_SESSION['senha'] = $senha;
		echo "<script>location.href='../view/menu.php';</script>";
	}else{
		unset ($_SESSION['cpf']);
		unset ($_SESSION['senha']);
		echo ("<script>alert('Login incorreto');	location.href='../index.php';</script>");
	}
?>
