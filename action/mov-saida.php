<?php
	require_once ('../model/Produtos.php');
	require_once ('../model/Saida.php');
	require_once ('../bd/Cadastrar.php');
	require_once ('../bd/Alterar.php');
	require_once ('../bd/Buscar.php');
	session_start();

	$saida = new Saida();
	
	$req_codigo_req = $_POST['tMicro'];
	$departamento = $_POST['tDepartamento'];
	$dt = $_POST['tData'];
	$data = date('d/m/Y',  strtotime($dt));
	$cod_prod_saida = $_POST['codigo_produto'];
	$prod = $_POST['descricao'];
	$unid = $_POST['tUnidade'];

	if ($prod == "") {
		echo ("<script>alert('Codigo de produto não cadastrado no sistema!');	location.href='../view/movimentacao-est-saida.php';</script>");
	}else{

		$saida->setReq_codigo_req($req_codigo_req);
		$saida->setDepartamento($departamento);
		$saida->setData($data);
		$saida->setCod_prod_saida($cod_prod_saida);
		$saida->setProd($prod);
		$saida->setUnid($unid);

		$req_codigo_req = $saida->getReq_codigo_req();
		$departamento = $saida->getDepartamento();
		$data = $saida->getData();
		$cod_prod_saida = $saida->getCod_prod_saida();
		$prod = $saida->getProd();
		$unid = $saida->getUnid();

		$produtos = new Produtos();

		$codigo_produto = $cod_prod_saida;

		$resultadoP = buscarProduto($codigo_produto);
		$unidP = $resultadoP['unidade'];
		$quantP = $resultadoP['quantidade'];
		$totP = $resultadoP['total_produto'];
		// echo $unidP; echo "*********";
		// echo $quantP; echo "*********";
		// echo $totP; echo "*********";

		$unidade = $unidP-$unid; //novo valor da unidade do produto depois da baixa no estoque
		$total_produto = $unidade*$quantP; //atualiza o total de produtos

		if ($unidade <= 0) {
		// echo "volta!";
			echo ("<script>alert('Ops! Unidade informada é maior que a unidade atual $unidP do Produto!');	location.href='../view/movimentacao-est-saida.php';</script>");
		}else{
		// echo "vai!";
			$resultaS = cadastrarSaida($req_codigo_req,$departamento,$data,$cod_prod_saida,$prod,$unid);
			$res = atualizarSaidaProduto($codigo_produto,$unidade,$total_produto);
			if ($resultaS == 1 && $res==1){
			echo ("<script>alert('Operação realizada com sucesso!');	location.href='../view/visualizar-prod.php';</script>");
			}else{
				echo ("<script>alert('Ops! Não foi possível realizar a operação!');	location.href='../view/movimentacao-est-saida.php';</script>");
			}
		}
	}
?>