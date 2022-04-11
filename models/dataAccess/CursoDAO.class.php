<?php
	class CursoDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function consultar()
		{
			$sql = "SELECT * FROM curso";

			try
			{
				$stm = $this->conexao->prepare($sql);
				$stm->execute();
				$this->conexao = null;
				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				return "Problema ao consultar os cursos";
			}
		}

		public function inserir ($curso)
		{
			$sql = "INSERT INTO curso (nome) VALUES (?)";

			try
			{
				$stm = $this->conexao->prepare($sql);
				$stm->bindValue(1, $curso->getNome());
				$stm->execute();
				$this->conexao = null;
				
				return "Curso inserido com sucesso!";
			}
			catch (PDOException $e)
			{
				$this->conexao = null;
				return "Problema ao inserir curso";
			}
		}

		public function buscarCurso($curso)
		{
			$sql = "SELECT * FROM curso WHERE idcurso = ?";

			try
			{
				$stm = $this->conexao->prepare($sql);
				$stm->bindValue(1, $curso->getIdcurso());
				$stm->execute();
				$this->conexao = null;
				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				$this->conexao = null;
				return "Problema ao buscar um curso";
			}
		}

		public function alterar($curso)
		{
			$sql = "UPDATE curso SET nome = ? WHERE idcurso= ?";

			try
			{
				$stm = $this->conexao->prepare($sql);
				$stm->bindValue(1, $curso->getNome());
				$stm->execute();
				$this->conexao = null;
				return "Curso alterado com sucesso";				
			}
			catch(PDOException $e)
			{
				$this->conexao = null;
				return "Problema ao alterar o curso";
			}
		}
		
		public function excluir($curso)
		{
			$sql = "DELETE FROM curso WHERE idcurso = ?";

			try
			{
				$stm = $this->conexao->prepare($sql);
				$stm->bindValue(1, $curso->getIdcurso());
				$stm->execute();
				$this->conexao = null;
				return "Curso Excluido com Sucesso";
			}
			catch(PDOException $e)
			{
				$this->conexao = null;
				return "Problema ao excluir o curso";
			}
		}
	}
?>