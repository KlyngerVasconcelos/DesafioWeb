<?php
	// Inicia sessões
	session_start();
	// Verifica se existe os dados da sessão de login
	if(!isset($_SESSION["cpf"]) || !isset($_SESSION["senha"])){
		echo ("<script>alert('Usuário não Logado! Login Obrigatório.');	location.href='../index.php';</script>");
	}
?>