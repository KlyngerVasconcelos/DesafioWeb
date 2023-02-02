<?php 
	require_once ('Conexao.php');

	function atualizarProduto($codigo_produto,$descricao,$gruproduto,$subgrupo,$referencia,$lote,$micro,$estminimo,$estmaximo,$estmedio,$mensagem){
		$con = new Conexao();
		$sql = "UPDATE produtos SET descricao = '$descricao', gruproduto = '$gruproduto',subgrupo = '$subgrupo', referencia = '$referencia',lote = '$lote', micro = '$micro',estminimo = '$estminimo', estmaximo = '$estmaximo',estmedio = '$estmedio', mensagem = '$mensagem' WHERE codigo_produto = '$codigo_produto'";
		$resultado = mysqli_query($con->conexao(),$sql);
		
		return $resultado;
	}

	function atualizarFornecedor($cnpj,$fantasia,$estado,$cidade,$endereco,$contato,$banco,$agencia,$conta,$email,$site,$mensagem){
		$con = new Conexao();
		$sql = "UPDATE fornecedores SET fantasia = '$fantasia', estado = '$estado',cidade = '$cidade', endereco = '$endereco',contato = '$contato', banco = '$banco',agencia = '$agencia', conta = '$conta',email = '$email', site = '$site', mensagem = '$mensagem' WHERE cnpj = '$cnpj'";
		$resultado = mysqli_query($con->conexao(),$sql);
		
		return $resultado;
	}

	function atualizarRequisitante($codigo_requisitante,$nome,$local,$departamento,$mensagem){
		$con = new Conexao();
		$sql = "UPDATE requisitante SET nome = '$nome',local = '$local', departamento = '$departamento',mensagem = '$mensagem' WHERE codigo_requisitante = '$codigo_requisitante'";
		$resultado = mysqli_query($con->conexao(),$sql);
		
		return $resultado;
	}

	function atualizarEntradaProduto($codigo_produto,$unidadeP,$quantidadeP,$totalP){
		$con = new Conexao();
		$sql = "UPDATE produtos SET unidade = '$unidadeP',quantidade = '$quantidadeP',total_produto = '$totalP' WHERE codigo_produto = '$codigo_produto'";
		$res = mysqli_query($con->conexao(),$sql);
		
		return $res;
	}

	function atualizarSaidaProduto($codigo_produto,$unidade,$total_produto){
		$con = new Conexao();
		$sql = "UPDATE produtos SET unidade = '$unidade',total_produto = '$total_produto' WHERE codigo_produto = '$codigo_produto'";
		$res = mysqli_query($con->conexao(),$sql);
		
		return $res;
	}
?>