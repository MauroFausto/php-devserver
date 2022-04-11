<?php

	require_once "models/composite/interfaces/componente.php";
	require_once "models/composite/classes/ul.class.php";
	require_once "models/composite/classes/li.class.php";
	require_once "models/composite/classes/a.class.php";
	require_once "models/composite/classes/inputButton.class.php";
	require_once "models/composite/classes/inputDate.class.php";
	require_once "models/composite/classes/inputText.class.php";
	require_once "models/composite/classes/radioButton.class.php";
	
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

		public function MostraFormularioContato()
		{
			
		}
	}
?>