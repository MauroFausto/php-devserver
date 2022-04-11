<?php

	require_once "../interfaces/componente.php";

	class inputButton implements componente
	{
		private $elemento;
		
		public function __construct($elemento)
		{
			$this->elemento = $elemento;
		}

		public function criar()
		{
			echo "<input type='submit'>";
			$this->elemento->criar(); 
			echo "</input>";
		}

        public function criarComId($id)
		{
			echo "<input type='submit' id='$id'>";
			$this->elemento->criar(); 
			echo "</input>";
		}

        public function criarComIdValor($id, $valor)
		{
			echo "<input type='submit' id='$id' value='$valor'>";
			$this->elemento->criar(); 
			echo "</input>";
		}
	}
?>