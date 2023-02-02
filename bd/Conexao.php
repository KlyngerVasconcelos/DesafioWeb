<?php
	class Conexao{
		public function conexao(){
			
			$con = mysqli_connect("localhost","root","","almosystem") 
			or die("ops!".mysqli_error()); 
			mysqli_set_charset($con,"utf8");
		
			return $con;
		}
	}
?>