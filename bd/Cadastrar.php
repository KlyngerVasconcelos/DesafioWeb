<?php 
	require_once ('Conexao.php');

	function cadastrarProduto($codigo_produto,$descricao,$unidade,$quantidade,$total_produto,$gruproduto,$subgrupo,$referencia,$codigobarra,$lote,$micro,$situacao,$estminimo,$estmaximo,$estmedio,$mensagem){
		$con = new Conexao();
		$sql = "INSERT INTO produtos (codigo_produto, descricao, unidade,quantidade,total_produto,gruproduto,subgrupo, referencia, codigobarra,lote,micro, situacao, estminimo,estmaximo,estmedio,mensagem) VALUES ('$codigo_produto','$descricao','$unidade','$quantidade','$total_produto','$gruproduto','$subgrupo','$referencia','$codigobarra','$lote','$micro','$situacao','$estminimo','$estmaximo','$estmedio','$mensagem')";
		$resultado = mysqli_query($con->conexao(),$sql);
		return $resultado;
	}

	function cadastrarFornecedor($cnpj,$razao,$fantasia,$estado,$cidade,$endereco,$contato,$banco,$agencia,$conta,$datacadastramento,$email,$site,$mensagem){
		$con = new Conexao();
		$sql = "INSERT INTO fornecedores (cnpj, razao, fantasia,estado,cidade, endereco, contato,banco,agencia, conta, datacadastramento,email,site,mensagem) VALUES ('$cnpj','$razao','$fantasia','$estado','$cidade','$endereco','$contato','$banco','$agencia','$conta','$datacadastramento','$email','$site','$mensagem')";
		$resultado = mysqli_query($con->conexao(),$sql);
		return $resultado;
	}

	function cadastrarRequisitante($codigo_requisitante,$nome,$local,$departamento,$mensagem){
		$con = new Conexao();
		$sql = "INSERT INTO requisitante (codigo_requisitante, nome, local,departamento,mensagem) VALUES ('$codigo_requisitante','$nome','$local','$departamento','$mensagem')";
		$resultado = mysqli_query($con->conexao(),$sql);
		return $resultado;
	}

	function cadastrarEntrada($cnpj_cod_cnpj,$unidade,$data,$codprod_cod_codprod,$produto,$quant_atual,$quantidade,$valor_unitario,$valor_total){
		$con = new Conexao();
		$sql = "INSERT INTO entrada_estoque (cnpj_cod_cnpj, unidade, data,codprod_cod_codprod,produto, quant_atual, quantidade,valor_unitario,valor_total) VALUES ('$cnpj_cod_cnpj','$unidade','$data','$codprod_cod_codprod','$produto','$quant_atual','$quantidade','$valor_unitario','$valor_total')";
		$resultaE = mysqli_query($con->conexao(),$sql);
		return $resultaE;
	}

	function cadastrarSaida($req_codigo_req,$departamento,$data,$cod_prod_saida,$prod,$unid){
		$con = new Conexao();
		$sql = "INSERT INTO saida_estoque (req_codigo_req, departamento, data,cod_prod_saida,prod, unid) VALUES ('$req_codigo_req','$departamento','$data','$cod_prod_saida','$prod','$unid')";
		$resultaS = mysqli_query($con->conexao(),$sql);
		return $resultaS;
	}
?>