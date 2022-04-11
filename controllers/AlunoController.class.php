<?php

	require_once "models/Conexao.class.php";
	require_once "models/AlunoDAO.class.php";
	require_once "models/Aluno.class.php";
	
	class AlunoController
	{
		public function listar()
		{
			$alunoDAO = new alunoDAO();
			$retorno = $alunoDAO->consultar();
			
			require_once "views/aluno/listar_aluno.php";
			
			
		}//fim listar
		
		public function inserir()
		{
			require_once "views/aluno/form_aluno.php";
			if($_POST)
			{
				//verificar o preenchimento dos dados
				$erro = 0;
				if(empty($_POST["nome"]))
				{
					$erro++;
					echo "<script>alert('Preencha o nome do aluno')</script>";
				}
				if($_POST["cpf"] == "")
				{
					$erro++;
					echo "<script>alert('Preencha o CPF do aluno')</script>";
				}
				if($_POST["data"] == "")
				{
					$erro++;
					echo "<script>alert('Preencha a data de nascimento do aluno')</script>";
				}
				if($erro == 0)
				{
					//inserir no BD
					$aluno = new Aluno(cpf:$_POST["cpf"], nome:$_POST["nome"], dataNascimento:$_POST["data"]);
					
					$alunoDAO = new AlunoDAO();
					$retorno = $alunoDAO->inserir($aluno);
					header("location:index.php?controle=AlunoController&metodo=listar&msg=$retorno");
					
					
				}
				
			}
		}//fim inserir
		public function alterar()
		{
			if(isset($_GET["id"]))
			{
				$aluno = new Aluno(idaluno:$_GET["id"]);
				$alunoDAO = new AlunoDAO();
				$ret = $alunoDAO->buscarAluno($aluno);
				if(is_array($ret))
				{
					if(count($ret) > 0)
					{
						require_once "views/aluno/edit_aluno.php";
					}
					else
					{
						//aluno não encontrado
						header("location:index.php?controle=AlunoController&metodo=listar&msg=Aluno não encontrado");
					}
				}
				else
				{
					//problema
					header("location:index.php?controle=AlunoController&metodo=listar&msg=$ret");
				}
			}//if $_GET
			
			if($_POST)
			{
				//verificar os dados
				
				//update no registro do aluno
				$aluno = new Aluno(idaluno:$_POST["idaluno"], nome:$_POST["nome"], cpf:$_POST["cpf"], dataNascimento:$_POST["data"]);
				
				$alunoDAO = new AlunoDAO();
				$retorno = $alunoDAO->alterar($aluno);
				
				//header
				header("location:index.php?controle=AlunoController&metodo=listar&msg=$retorno");
			}//if $_POST
			
		}//fim alterar
		public function excluir()
		{
			if(isset($_GET["id"]))
			{
				$aluno = new Aluno(idaluno:$_GET["id"]);
				$alunoDAO = new AlunoDAO();
				$retorno = $alunoDAO->excluir($aluno);
				header("location:index.php?controle=AlunoController&metodo=listar&msg=$retorno");
			}
		}//fim excluir
	}//fim da classe AlunoController
?>