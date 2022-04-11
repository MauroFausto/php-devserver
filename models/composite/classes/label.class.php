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
			echo "<label>";
			$this->elemento->criar(); 
			echo "</label>";
		}

        public function criarComTexto($texto)
		{
			echo "<label>$texto";
			$this->elemento->criar(); 
			echo "</label>";
		}
		
	}//fim da classe
?>