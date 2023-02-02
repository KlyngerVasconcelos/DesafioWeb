<?php
	session_start();
	
	unset(	//apaga as var's.
		$_SESSION['cpf'],
		$_SESSION['senha']
	);
	echo ("<script>alert('Deslogado com sucesso.');	location.href='../index.php';</script>");
?>