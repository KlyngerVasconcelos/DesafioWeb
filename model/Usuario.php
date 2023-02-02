<?php
	
	class Usuario{

		private $codigo;
		private $cpf;
		private $senha;
		
		
		public function getCodigo(){
			return $this->codigo;
		}
		
		public function setCodigo($codigo){
			$this->codigo = $codigo;
			return $this;
		}

		public function getCpf(){
			return $this->cpf;
		}
		
		public function setCpf($cpf){
			$this->cpf = $cpf;
			return $this;
		}
		
		public function getSenha(){
			return $this->senha;
		}
		
		public function setSenha($senha){
			$this->senha = $senha;
		return $this;
		}
	}
?>