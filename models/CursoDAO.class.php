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
	}//fim da classe
?>