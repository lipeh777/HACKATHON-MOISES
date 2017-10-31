<?php
	include "Produto.php";
	class Estante{
		public $posição;
		public $rua; 
		public $pratileira;

		function vazia(){
			$cont = 0;
			if($this->pratileira == false){
				$cont++;
			}
			else if($cont == 5){
				$this->pratileira = true;
				$this->rua++;
			} 
		}
		function Adcionar(){
			if ($Produto->prioridade ==1 ) {

			
		}

			
		function get(){
			echo $rua.'-'.$pratileira.'-'.$posição;
		}


?>