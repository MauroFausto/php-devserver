<?php
	class Curso
	{
		private $idcurso;
		private $nome;
		
		public function __construct($idcurso = null, $nome = null)
		{
			$this->idcurso = $idcurso;
			$this->nome = $nome;
		}
		//métodos gets
		
		public function getIdcurso()
		{
			return $this->idcurso;
		}
		
		public function getNome()
		{
			return $this->nome;
		}
	}//fim classe
?>