<?php
	require_once ('Conexao.php');

	function buscarProduto($codigo_produto){
		$con = new Conexao();

		$sql = "SELECT * FROM produtos WHERE codigo_produto = '$codigo_produto'";
		$resultadoP = mysqli_query($con->conexao(),$sql);
		$resp = mysqli_fetch_array($resultadoP);

		return $resp;
	}
?>