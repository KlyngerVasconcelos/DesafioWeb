<?php
	require_once ('../model/Produtos.php');
	require_once ('../model/Entrada.php');
	require_once ('../bd/Cadastrar.php');
	require_once ('../bd/Alterar.php');
	require_once ('../bd/Buscar.php');
	session_start();

	$entrada = new Entrada();
	
	$cnpj_cod_cnpj = $_POST['tMicro'];
	$unidade = $_POST['tUnidade'];
	$dt = $_POST['tData'];
	$data = date('d/m/Y',  strtotime($dt));
	$codprod_cod_codprod = $_POST['codigo_produto'];
	$produto = $_POST['descricao'];
	$quant_atual = $_POST['quantidade'];
	$quantidade = $_POST['tQuantidade'];
	$valor_unitario = $_POST['tValorUnitario'];
	$valor_total = $_POST['tValorTotal'];

	if ($produto == "") {
		echo ("<script>alert('Codigo de produto não cadastrado no sistema!');	location.href='../view/movimentacao-est-entrada.php';</script>");
	}else{

		$entrada->setCnpj_cod_cnpj($cnpj_cod_cnpj);
		$entrada->setUnidade($unidade);
		$entrada->setData($data);
		$entrada->setCodprod_cod_codprod($codprod_cod_codprod);
		$entrada->setProduto($produto);
		$entrada->setQuant_atual($quant_atual);
		$entrada->setQuantidade($quantidade);
		$entrada->setValor_unitario($valor_unitario);
		$entrada->setValor_total($valor_total);

		$cnpj_cod_cnpj = $entrada->getCnpj_cod_cnpj();
		$unidade = $entrada->getUnidade();
		$data = $entrada->getData();
		$codprod_cod_codprod = $entrada->getCodprod_cod_codprod();
		$produto = $entrada->getProduto();
		$quant_atual = $entrada->getQuant_atual();
		$quantidade = $entrada->getQuantidade();
		$valor_unitario = $entrada->getValor_unitario();
		$valor_total = $entrada->getValor_total();

		$produtos = new Produtos();

		$codigo_produto = $codprod_cod_codprod;

		$resultadoP = buscarProduto($codigo_produto);
		$unidP = $resultadoP['unidade'];
		$totP = $resultadoP['total_produto'];
		$unidadeP = $unidP+$unidade; //valor atualizado da unidade com a entrada
		$quantidadeP = $quantidade; //valor atualizado da quantidade
		$totalP = (($unidade*$quantidade)+$totP); //valor do total de produtos atualizado

		$resultaE = cadastrarEntrada($cnpj_cod_cnpj,$unidade,$data,$codprod_cod_codprod,$produto,$quant_atual,$quantidade,$valor_unitario,$valor_total);
		$res = atualizarEntradaProduto($codigo_produto,$unidadeP,$quantidadeP,$totalP);
		if ($resultaE == 1 && $res==1){
			echo ("<script>alert('Operação realizada com sucesso!');	location.href='../view/visualizar-prod.php';</script>");
		}else{
			echo ("<script>alert('Ops! Não foi possível realizar a operação!');	location.href='../view/movimentacao-est-entrada.php';</script>");
		}
	}
?>