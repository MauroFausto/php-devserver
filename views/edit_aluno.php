<!doctype html>
<html>
	<head>
		<title>Cadastro de Aluno</title>
	</head>
	<body>
		<h2>Alterar o Cadastro do Aluno</h2>
		<form action="#" method="post">
		
			<input type="hidden" name="idaluno" value="<?php echo $ret[0]->idaluno;?>">
			
			<label>Nome:</label>
			<input type="text" name="nome" value="<?php echo $ret[0]->nome;?>"><br><br>
			
			<label>CPF:</label>
			<input type="text" name="cpf" value="<?php  echo $ret[0]->cpf;?>"><br><br>
			
			<label>Data de Nascimento:</label>
			<input type="date" name="data" value="<?php echo $ret[0]->dataNascimento;?>"><br><br>
			
			<input type="submit" value="Alterar">
		</form>
	</body>
</html>