<?php 
	require_once ('Conexao.php');

	function removerProduto($codigo_produto){
		$con = new Conexao();
		$sql = "DELETE FROM produtos WHERE codigo_produto = '$codigo_produto'";
		$result = mysqli_query($con->conexao(),$sql);
		
		return $result;
	}

	function removerFornecedor($cnpj){
		$con = new Conexao();
		$sql = "DELETE FROM fornecedores WHERE cnpj = '$cnpj'";
		$result = mysqli_query($con->conexao(),$sql);
		
		return $result;
	}

	function removerRequisitante($codigo_requisitante){
		$con = new Conexao();
		$sql = "DELETE FROM requisitante WHERE codigo_requisitante = '$codigo_requisitante'";
		$result = mysqli_query($con->conexao(),$sql);
		
		return $result;
	}
?>