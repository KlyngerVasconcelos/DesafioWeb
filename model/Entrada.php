<?php
	
	class Entrada{

		private $cnpj_cod_cnpj;
		private $unidade;
		private $data;
		private $codprod_cod_codprod;
		private $produto;
		private $quant_atual;
		private $quantidade;
		private $valor_unitario;
		private $valor_total;
		
		
		public function getCnpj_cod_cnpj(){
			return $this->cnpj_cod_cnpj;
		}
		
		public function setCnpj_cod_cnpj($cnpj_cod_cnpj){
			$this->cnpj_cod_cnpj = $cnpj_cod_cnpj;
			return $this;
		}

		public function getUnidade(){
			return $this->unidade;
		}
		
		public function setUnidade($unidade){
			$this->unidade = $unidade;
			return $this;
		}
		
		public function getData(){
			return $this->data;
		}
		
		public function setData($data){
			$this->data = $data;
		return $this;
		}

		public function getCodprod_cod_codprod(){
			return $this->codprod_cod_codprod;
		}
		
		public function setCodprod_cod_codprod($codprod_cod_codprod){
			$this->codprod_cod_codprod = $codprod_cod_codprod;
			return $this;
		}

		public function getProduto(){
			return $this->produto;
		}
		
		public function setProduto($produto){
			$this->produto = $produto;
			return $this;
		}
		
		public function getQuant_atual(){
			return $this->quant_atual;
		}
		
		public function setQuant_atual($quant_atual){
			$this->quant_atual = $quant_atual;
		return $this;
		}

		public function getQuantidade(){
			return $this->quantidade;
		}
		
		public function setQuantidade($quantidade){
			$this->quantidade = $quantidade;
			return $this;
		}

		public function getValor_unitario(){
			return $this->valor_unitario;
		}
		
		public function setValor_unitario($valor_unitario){
			$this->valor_unitario = $valor_unitario;
			return $this;
		}
		
		public function getValor_total(){
			return $this->valor_total;
		}
		
		public function setValor_total($valor_total){
			$this->valor_total = $valor_total;
		return $this;
		}
	}
?>