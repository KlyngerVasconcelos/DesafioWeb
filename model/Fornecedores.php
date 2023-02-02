<?php
	
	class Fornecedores{

		private $cnpj;
		private $razao;
		private $fantasia;
		private $estado;
		private $cidade;
		private $endereco;
		private $contato;
		private $banco;
		private $agencia;
		private $conta;
		private $datacadastramento;
		private $email;
		private $site;
		private $mensagem;		
		
		public function getCnpj(){
			return $this->cnpj;
		}
		
		public function setCnpj($cnpj){
			$this->cnpj = $cnpj;
			return $this;
		}

		public function getRazao(){
			return $this->razao;
		}
		
		public function setRazao($razao){
			$this->razao = $razao;
			return $this;
		}

		public function getFantasia(){
			return $this->fantasia;
		}
		
		public function setFantasia($fantasia){
			$this->fantasia = $fantasia;
			return $this;
		}

		public function getEstado(){
			return $this->estado;
		}
		
		public function setEstado($estado){
			$this->estado = $estado;
			return $this;
		}

		public function getCidade(){
			return $this->cidade;
		}
		
		public function setCidade($cidade){
			$this->cidade = $cidade;
			return $this;
		}

		public function getEndereco(){
			return $this->endereco;
		}
		
		public function setEndereco($endereco){
			$this->endereco = $endereco;
			return $this;
		}

		public function getContato(){
			return $this->contato;
		}
		
		public function setContato($contato){
			$this->contato = $contato;
			return $this;
		}

		public function getBanco(){
			return $this->banco;
		}
		
		public function setBanco($banco){
			$this->banco = $banco;
			return $this;
		}

		public function getAgencia(){
			return $this->agencia;
		}
		
		public function setAgencia($agencia){
			$this->agencia = $agencia;
			return $this;
		}

		public function getConta(){
			return $this->conta;
		}
		
		public function setConta($conta){
			$this->conta = $conta;
			return $this;
		}

		public function getDatacadastramento(){
			return $this->datacadastramento;
		}
		
		public function setDatacadastramento($datacadastramento){
			$this->datacadastramento = $datacadastramento;
			return $this;
		}

		public function getEmail(){
			return $this->email;
		}
		
		public function setEmail($email){
			$this->email = $email;
			return $this;
		}

		public function getSite(){
			return $this->site;
		}
		
		public function setSite($site){
			$this->site = $site;
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