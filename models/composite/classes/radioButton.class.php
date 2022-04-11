<?php

	require_once "../interfaces/componente.php";

	class radioButton implements componente
	{
		private $elemento;
		
		public function __construct($elemento)
		{
			$this->elemento = $elemento;
		}

		public function criar()
		{
			echo "<input type='radio'>";
			$this->elemento->criar(); 
			echo "</input>";
		}

        public function criarComId($id)
		{
			echo "<input type='radio' id='$id'>";
			$this->elemento->criar(); 
			echo "</input>";
		}

        public function criarComIdValor($id, $valor)
		{
			echo "<input type='radio' id='$id' value='$valor'>";
			$this->elemento->criar(); 
			echo "</input>";
		}
	}
?>