<?php

	require_once "models/Conexao.class.php";
	require_once "models/AlunoDAO.class.php";
	require_once "models/Aluno.class.php";
	
	class CursoController
	{
		public function listar()
		{
			$cursoDAO = new CursoDAO();
			$retorno = $cursoDAO->consultar();
			
			require_once "views/curso/listar_aluno.php";	
		}
		
		public function inserir()
		{
			require_once "views/curso/form_curso.php";

			if($_POST)
			{
				//verificar o preenchimento dos dados
				$erro = 0;
				if(empty($_POST["nome"]))
				{
					$erro++;
					echo "<script>alert('Preencha o nome do curso')</script>";
				}
				if($erro == 0)
				{
					//inserir no BD
					$curso = new Curso(nome:$_POST["nome"]);
					
					$cursoDAO = new CursoDAO();
					$retorno = $cursoDAO->inserir($curso);
					header("location:index.php?controle=CursoController&metodo=listar&msg=$retorno");
				}
			}
		}

		public function alterar()
		{
			if(isset($_GET["id"]))
			{
				$curso = new Curso(idaluno:$_GET["id"]);
				$cursoDAO = new CursoDAO();
				$ret = $cursoDAO->buscarCurso($curso);

				if(is_array($ret))
				{
					if(count($ret) > 0)
					{
						require_once "views/curso/edit_curso.php";
					}
					else
					{
						// Curso não encontrado!
						header("location:index.php?controle=CursoController&metodo=listar&msg=Curso não encontrado");
					}
				}
				else
				{
					// Erro!
					header("location:index.php?controle=CursoController&metodo=listar&msg=$ret");
				}
			}
			
			if($_POST)
			{
				$curso = new Curso(idcurso:$_POST["idcurso"], nome:$_POST["nome"]);
				
				$cursoDAO = new AlunoDAO();
				$retorno = $cursoDAO->alterar($curso);

				header("location:index.php?controle=CursoController&metodo=listar&msg=$retorno");
			}			
		}

		public function excluir()
		{
			if(isset($_GET["id"]))
			{
				$curso = new Curso(idcurso:$_GET["id"]);
				$cursoDAO = new CursoDAO();
				$retorno = $cursoDAO->excluir($curso);
				
				header("location:index.php?controle=CursoController&metodo=listar&msg=$retorno");
			}
		}
	}
?>