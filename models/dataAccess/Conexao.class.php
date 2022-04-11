<?php
	abstract class Conexao
	{
		protected $conexao;
		
		protected function __construct()
		{
			$parametros = "mysql:host=localhost;dbname=curso;charset=utf8mb4";
			
			try
			{
				$this->conexao = new PDO($parametros, "root", "");
			}
			catch(PDOException $e)
			{
				die("Problema ao abrir a conexão com BD");
			}			
		}			
	}
?>