<?php
	require_once "Models/componente.php";
	require_once "Models/ul.class.php";
	require_once "Models/li.class.php";
	require_once "Models/a.class.php";
	
	class InicioController
	{
		public function MostrarMenu()
		{
			//criar o menu usando composite
			
			$a = new a("index.php?controle=CursoController&metodo=listar", "Listar Cursos");
			
			$li = new li($a);
			
			$ul = new ul();
			$ul->setElemento($li);
			
			$ul->setElemento(new li(new a("index.php?controle=AlunoController&metodo=listar", "Listar Alunos")));
			
			require_once "views/menu.php";
		}
	}
?>