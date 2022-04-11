<?php
	class Aluno
	{
		//PHP 8
		public function __construct(private int $idaluno=0, private string $nome="", private string $cpf="", private string $dataNascimento=""){}
		
		//métodos gets
		
		public function getIdaluno()
		{
			return $this->idaluno;
		}
		public function getNome()
		{
			return $this->nome;
		}
		public function getCpf()
		{
			return $this->cpf;
		}
		public function getDataNascimento()
		{
			return $this->dataNascimento;
		}
	
	}//fim da classe
?>