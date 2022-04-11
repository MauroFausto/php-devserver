<?php
	class AlunoDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function consultar()
		{
			$sql = "SELECT * FROM aluno";
			
			try
			{
				$stm = $this->conexao->prepare($sql);
				$stm->execute();
				$this->conexao = null;
				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				$this->conexao = null;
				return "Problema ao consultar alunos";
			}
		}

		public function inserir($aluno)
		{
			$sql = "INSERT INTO aluno (nome, cpf, dataNascimento)VALUES(?,?,?)";
			try
			{
				$stm = $this->conexao->prepare($sql);
				$stm->bindValue(1, $aluno->getNome());
				$stm->bindValue(2, $aluno->getCpf());
				$stm->bindValue(3, $aluno->getDataNascimento());
				$stm->execute();
				$this->conexao = null;
				return "Aluno inserido com sucesso";
			}
			catch(PDOException $e)
			{
				$this->conexao = null;
				return "Problema ao inserir aluno";
			}
		}

		public function buscarAluno($aluno)
		{
			$sql = "SELECT * FROM aluno WHERE idaluno = ?";
			try
			{
				$stm = $this->conexao->prepare($sql);
				$stm->bindValue(1, $aluno->getIdaluno());
				$stm->execute();
				$this->conexao = null;
				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				$this->conexao = null;
				return "Problema ao buscar um aluno";
			}
		}

		public function alterar($aluno)
		{
			$sql = "UPDATE aluno SET nome = ?, cpf = ?, dataNascimento = ? WHERE idaluno = ?";
			try
			{
				$stm = $this->conexao->prepare($sql);
				$stm->bindValue(1, $aluno->getNome());
				$stm->bindValue(2, $aluno->getCpf());
				$stm->bindValue(3, $aluno->getDataNascimento());
				$stm->bindValue(4, $aluno->getIdaluno());
				$stm->execute();
				$this->conexao = null;
				return "Aluno alterado com sucesso";
				
			}
			catch(PDOException $e)
			{
				$this->conexao = null;
				return "Problema ao alterar o aluno";
			}
		}

		public function excluir($aluno)
		{
			$sql = "DELETE FROM aluno WHERE idaluno = ?";
			try
			{
				$stm = $this->conexao->prepare($sql);
				$stm->bindValue(1, $aluno->getIdaluno());
				$stm->execute();
				$this->conexao = null;
				return "Aluno Excluido com Sucesso";
			}
			catch(PDOException $e)
			{
				$this->conexao = null;
				return "Problema ao excluir o aluno";
			}
		}
	}
?>