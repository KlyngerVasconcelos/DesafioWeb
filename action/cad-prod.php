<?php
	require_once ('../model/Produtos.php');
	require_once ('../bd/Cadastrar.php');
	session_start();

	$produtos = new Produtos();
	
	$codigo_produto = $_POST['tCpdigo'];
	$descricao = $_POST['tDesProduto'];
	$unidade = $_POST['tUnidade'];
	$quantidade = $_POST['tQuantidade'];
	$gruproduto = $_POST['tGrupProduto'];
	$subgrupo = $_POST['tSubGrupo'];
	$referencia = $_POST['tReferncia'];
	$codigobarra = $_POST['tCodigoBarra'];
	$lote = $_POST['tPossLote'];
	$micro = $_POST['tMicro'];
	$situacao = $_POST['sit'];
	$estminimo = $_POST['tEstoqueMinimo'];
	$estmaximo = $_POST['tMaximo'];
	$estmedio = $_POST['tMedio'];
	$mensagem = $_POST['tMsg'];
	$total_produto = $unidade*$quantidade;

	$produtos->setCodigo_produto($codigo_produto);
	$produtos->setDescricao($descricao);
	$produtos->setUnidade($unidade);
	$produtos->setQuantidade($quantidade);
	$produtos->setTotal_produto($total_produto);
	$produtos->setGruproduto($gruproduto);
	$produtos->setSubgrupo($subgrupo);
	$produtos->setReferencia($referencia);
	$produtos->setCodigobarra($codigobarra);
	$produtos->setLote($lote);
	$produtos->setMicro($micro);
	$produtos->setSituacao($situacao);
	$produtos->setEstminimo($estminimo);
	$produtos->setEstmaximo($estmaximo);
	$produtos->setEstmedio($estmedio);
	$produtos->setMensagem($mensagem);

	$codigo_produto = $produtos->getCodigo_produto();
	$descricao = $produtos->getDescricao();
	$unidade = $produtos->getUnidade();
	$quantidade = $produtos->getQuantidade();
	$total_produto = $produtos->getTotal_produto();
	$gruproduto = $produtos->getGruproduto();
	$subgrupo = $produtos->getSubgrupo();
	$referencia = $produtos->getReferencia();
	$codigobarra = $produtos->getCodigobarra();
	$lote = $produtos->getLote();
	$micro = $produtos->getMicro();
	$situacao = $produtos->getSituacao();
	$estminimo = $produtos->getEstminimo();
	$estmaximo = $produtos->getEstmaximo();
	$estmedio = $produtos->getEstmedio();
	$mensagem = $produtos->getMensagem();
	
	$resultado = cadastrarProduto($codigo_produto,$descricao,$unidade,$quantidade,$total_produto,$gruproduto,$subgrupo,$referencia,$codigobarra,$lote,$micro,$situacao,$estminimo,$estmaximo,$estmedio,$mensagem);
	if ($resultado == 1){
		echo ("<script>alert('Produto cadastrado com exito!');	location.href='../view/visualizar-prod.php';</script>");
	}else{
		echo ("<script>alert('Codigo do produto já se encontra cadastrado!');	location.href='../view/menu.php';</script>");
	}
?>