<?php	
	class Saida{

		private $req_codigo_req;
		private $departamento;
		private $data;
		private $cod_prod_saida;
		private $prod;
		private $unid;
		
		
		public function getReq_codigo_req(){
			return $this->req_codigo_req;
		}
		
		public function setReq_codigo_req($req_codigo_req){
			$this->req_codigo_req = $req_codigo_req;
			return $this;
		}

		public function getDepartamento(){
			return $this->departamento;
		}
		
		public function setDepartamento($departamento){
			$this->departamento = $departamento;
			return $this;
		}
		
		public function getData(){
			return $this->data;
		}
		
		public function setData($data){
			$this->data = $data;
		return $this;
		}

		public function getCod_prod_saida(){
			return $this->cod_prod_saida;
		}
		
		public function setCod_prod_saida($cod_prod_saida){
			$this->cod_prod_saida = $cod_prod_saida;
			return $this;
		}

		public function getProd(){
			return $this->prod;
		}
		
		public function setProd($prod){
			$this->prod = $prod;
			return $this;
		}

		public function getUnid(){
			return $this->unid;
		}
		
		public function setUnid($unid){
			$this->unid = $unid;
			return $this;
		}
	}
?>