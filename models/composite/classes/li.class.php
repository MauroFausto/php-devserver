<?php

	require_once "../interfaces/componente.php";

	class li implements componente
	{
		private $elemento;
		
		public function __construct($elemento)
		{
			$this->elemento = $elemento;
		}
		public function criar()
		{
			echo "<li>";
			$this->elemento->criar(); 
			echo "</li>";
		}
		
	}//fim da classe
?>