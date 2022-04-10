<?php
	class  CursoController
	{
		public function listar()
		{
			require_once "models/Conexao.class.php";
			require_once "models/CursoDAO.class.php";
			$cursoDAO = new CursoDAO();
			$retorno = $cursoDAO->consultar();
			require_once "views/listar_curso.php";
		}
	}//fim classe
?>