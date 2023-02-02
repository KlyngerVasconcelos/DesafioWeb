<?php
	include_once("Conexao.php");
	
	function retorna($codigo_produto){
		$con = new Conexao();

		$sql = "SELECT * FROM produtos WHERE codigo_produto = '$codigo_produto' LIMIT 1";
		$result_prod = mysqli_query($con->conexao(),$sql);

		if($result_prod->num_rows){
			$row_prod = mysqli_fetch_assoc($result_prod);
			$valores['descricao'] = $row_prod['descricao'];
			$valores['quantidade'] = $row_prod['quantidade'];
		}else{
			$valores['descricao'] = '';
		}
		return json_encode($valores);
	}

	if(isset($_GET['codigo_produto'])){
		echo retorna($_GET['codigo_produto']);
	}
?>