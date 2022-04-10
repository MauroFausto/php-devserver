<?php
	class ul implements componente
	{
		private $elementos;
		
		
		public function criar()
		{
			echo "<ul>";
			foreach($this->elementos as $objeto)
			{
				$objeto->criar();
			}
			echo "</ul>";
		}
		
		public function setElemento($elemento)
		{
			$this->elementos[] = $elemento;
		}
	}//fim da classe
?>