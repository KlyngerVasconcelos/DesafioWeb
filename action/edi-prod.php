<?php
	require_once ('../model/Produtos.php');
	require_once ('../bd/Alterar.php');
	session_start();

	$produtos = new Produtos();
	
	$codigo_produto = $_POST['tCpdigo'];
	$descricao = $_POST['tDesProduto'];
	$gruproduto = $_POST['tGrupProduto'];
	$subgrupo = $_POST['tSubGrupo'];
	$referencia = $_POST['tReferncia'];
	$lote = $_POST['tPossLote'];
	$micro = $_POST['tMicro'];
	$estminimo = $_POST['tEstoqueMinimo'];
	$estmaximo = $_POST['tMaximo'];
	$estmedio = $_POST['tMedio'];
	$mensagem = $_POST['tMsg'];

	$produtos->setCodigo_produto($codigo_produto);
	$produtos->setDescricao($descricao);
	$produtos->setGruproduto($gruproduto);
	$produtos->setSubgrupo($subgrupo);
	$produtos->setReferencia($referencia);
	$produtos->setLote($lote);
	$produtos->setMicro($micro);
	$produtos->setEstminimo($estminimo);
	$produtos->setEstmaximo($estmaximo);
	$produtos->setEstmedio($estmedio);
	$produtos->setMensagem($mensagem);

	$codigo_produto = $produtos->getCodigo_produto();
	$descricao = $produtos->getDescricao();
	$gruproduto = $produtos->getGruproduto();
	$subgrupo = $produtos->getSubgrupo();
	$referencia = $produtos->getReferencia();
	$lote = $produtos->getLote();
	$micro = $produtos->getMicro();
	$estminimo = $produtos->getEstminimo();
	$estmaximo = $produtos->getEstmaximo();
	$estmedio = $produtos->getEstmedio();
	$mensagem = $produtos->getMensagem();
	
	$resultado = atualizarProduto($codigo_produto,$descricao,$gruproduto,$subgrupo,$referencia,$lote,$micro,$estminimo,$estmaximo,$estmedio,$mensagem);
	if ($resultado == 1){
		echo ("<script>alert('Produto atualizado com exito!');	location.href='../view/visualizar-prod.php';</script>");
	}else{
		echo ("<script>alert('Ops! Não foi possível atualizar'); location.href='../view/visualizar-prod.php';</script>");
	}
?>