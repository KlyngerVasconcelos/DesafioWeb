<?php
	
	class Requisitante{

		private $codigo_requisitante;
		private $nome;
		private $local;
		private $departamento;
		private $mensagem;
		
		
		public function getCodigo_requisitante(){
			return $this->codigo_requisitante;
		}
		
		public function setCodigo_requisitante($codigo_requisitante){
			$this->codigo_requisitante = $codigo_requisitante;
			return $this;
		}

		public function getNome(){
			return $this->nome;
		}
		
		public function setNome($nome){
			$this->nome = $nome;
			return $this;
		}
		
		public function getLocal(){
			return $this->local;
		}
		
		public function setLocal($local){
			$this->local = $local;
		return $this;
		}

		public function getDepartamento(){
			return $this->departamento;
		}
		
		public function setDepartamento($departamento){
			$this->departamento = $departamento;
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