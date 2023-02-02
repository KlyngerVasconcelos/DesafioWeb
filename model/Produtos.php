<?php
	
	class Produtos{
		
		private $codigo_produto;
		private $descricao;
		private $unidade;
		private $quantidade;
		private $total_produto;
		private $gruproduto;
		private $subgrupo;
		private $referencia;
		private $codigobarra;
		private $lote;
		private $micro;
		private $situacao;
		private $estminimo;
		private $estmaximo;
		private $estmedio;
		private $mensagem;		
		
		public function getCodigo_produto(){
			return $this->codigo_produto;
		}
		
		public function setCodigo_produto($codigo_produto){
			$this->codigo_produto = $codigo_produto;
			return $this;
		}

		public function getDescricao(){
			return $this->descricao;
		}
		
		public function setDescricao($descricao){
			$this->descricao = $descricao;
			return $this;
		}

		public function getUnidade(){
			return $this->unidade;
		}
		
		public function setUnidade($unidade){
			$this->unidade = $unidade;
			return $this;
		}

		public function getQuantidade(){
			return $this->quantidade;
		}
		
		public function setQuantidade($quantidade){
			$this->quantidade = $quantidade;
			return $this;
		}

		public function getTotal_produto(){
			return $this->total_produto;
		}
		
		public function setTotal_produto($total_produto){
			$this->total_produto = $total_produto;
			return $this;
		}

		public function getGruproduto(){
			return $this->gruproduto;
		}
		
		public function setGruproduto($gruproduto){
			$this->gruproduto = $gruproduto;
			return $this;
		}

		public function getSubgrupo(){
			return $this->subgrupo;
		}
		
		public function setSubgrupo($subgrupo){
			$this->subgrupo = $subgrupo;
			return $this;
		}

		public function getReferencia(){
			return $this->referencia;
		}
		
		public function setReferencia($referencia){
			$this->referencia = $referencia;
			return $this;
		}

		public function getCodigobarra(){
			return $this->codigobarra;
		}
		
		public function setCodigobarra($codigobarra){
			$this->codigobarra = $codigobarra;
			return $this;
		}

		public function getLote(){
			return $this->lote;
		}
		
		public function setLote($lote){
			$this->lote = $lote;
			return $this;
		}

		public function getMicro(){
			return $this->micro;
		}
		
		public function setMicro($micro){
			$this->micro = $micro;
			return $this;
		}

		public function getSituacao(){
			return $this->situacao;
		}
		
		public function setSituacao($situacao){
			$this->situacao = $situacao;
			return $this;
		}

		public function getEstminimo(){
			return $this->estminimo;
		}
		
		public function setEstminimo($estminimo){
			$this->estminimo = $estminimo;
			return $this;
		}

		public function getEstmaximo(){
			return $this->estmaximo;
		}
		
		public function setEstmaximo($estmaximo){
			$this->estmaximo = $estmaximo;
			return $this;
		}

		public function getEstmedio(){
			return $this->estmedio;
		}
		
		public function setEstmedio($estmedio){
			$this->estmedio = $estmedio;
			return $this;
		}

		public function getMensagem(){
			return $this->mensagem;
		}
		
		public function setMensagem($mensagem){
			$this->mensagem = $mensagem;
			return $this;
		}
	}
?>