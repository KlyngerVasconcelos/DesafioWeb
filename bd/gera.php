<?php
	ini_set('default_charset','UTF-8');
	require_once("../templates/mpdf/mpdf.php");
		$servidor = "localhost";
		$usuario = "root";
		$senha = "";
		$dbname = "almosystem";
	
		//Criar a conexão
		$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

		$relatorio= utf8_encode($_POST['relat']);

		if ($relatorio == "entrada") {

			$mpdf=new mPDF('utf-8', 'A4-R'); 
			$mpdf->charset_in='iso-8859-4';
			$mpdf->WriteHTML("<!DOCTYPE html>
				<html lang='pt-br'>
				<head>
				<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
				</head>
				<body>
				<hr/><h1 align='center'>Almosystem</h1><hr/>
				<h3>Relatorio Geral de Entrada no Estoque</h3><hr/>
				");
	
				$pcc="SELECT * FROM entrada_estoque" ;
				$pc = mysqli_query($conn, $pcc);
				$row = array();
				while ($data = mysqli_fetch_array($pc)) $row[] = $data; 
				foreach ($row as $x){
					$cnpj_cod_cnpj = $x[0];
					$unidade = $x[1];
					$data = $x[2];
					$codprod_cod_codprod = $x[3];
					$produto = $x[4];
					$quantidade = $x[5];
					$valor_unitario = $x[6];
					$valor_total = $x[7];

					$html="<table align='center'>
					<thead>
					<tr>
					<th>Empresa Fornecedora</th>
					<th>Unidade</th>
					<th>Data</th>
					<th>Codigo do Produto</th>
					<th>Produto</th>
					<th>Quantidade</th>
					<th>Valor Unitario</th>
					<th>Valor Total</th>
					</tr>
					</thead>
					<tbody>
					<tr >
					<td align='center'>$cnpj_cod_cnpj</td>
					<td align='center'>$unidade</td>
					<td align='center'>$data</td>
					<td align='center'>$codprod_cod_codprod</td>
					<td align='center'>$produto</td>
					<td align='center'>$quantidade</td>
					<td align='center'>$valor_unitario</td>
					<td align='center'>$valor_total</td>
					</tr>
					</tbody>
					</table>
					</body>
					</html>";
					$mpdf->WriteHTML($html); 
				}
			$mpdf->Output();
		}elseif ($relatorio == "saida") {
			$mpdf=new mPDF('utf-8', 'A4-R'); 
			$mpdf->charset_in='iso-8859-4';
			$mpdf->WriteHTML("<!DOCTYPE html>
				<html lang='pt-br'>
				<head>
				<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
				</head>
				<body>
				<hr/><h1 align='center'>Almosystem</h1><hr/>
				<h3>Relatorio Geral de Saida no Estoque</h3><hr/>
				");
	
				$pcc="SELECT * FROM saida_estoque" ;
				$pc = mysqli_query($conn, $pcc);
				$row = array();
				while ($data = mysqli_fetch_array($pc)) $row[] = $data; 
				foreach ($row as $x){
					$req_codigo_req = $x[0];
					$departamento = $x[1];
					$data = $x[2];
					$cod_prod_saida = $x[3];
					$prod = $x[4];
					$unid = $x[5];

					$html="<table align='center'>
					<thead>
					<tr>
					<th>Codigo do Requisitante</th>
					<th>Departamento</th>
					<th>Data</th>
					<th>Codigo do Produto</th>
					<th>Produto</th>
					<th>Unidade</th>
					</tr>
					</thead>
					<tbody>
					<tr>
					<td align='center'>$req_codigo_req</td>
					<td align='center'>$departamento</td>
					<td align='center'>$data</td>
					<td align='center'>$cod_prod_saida</td>
					<td align='center'>$prod</td>
					<td align='center'>$unid</td>
					</tr>
					</tbody>
					</table>
					</body>
					</html>";
					$mpdf->WriteHTML($html); 
				}
			$mpdf->Output();
		}else{
			echo ("<script>alert('Escolha um relatorio!');	location.href='../view/relatorios.php';</script>");
		}
	exit;
?>