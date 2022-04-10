<!doctype html>
<html>
	<head>
		<title>Cadastro de Aluno</title>
	</head>
	<body>
		<h2>Cadastro de Aluno</h2>
		<form action="#" method="post">
			<label>Nome:</label>
			<input type="text" name="nome" value="<?php if($_POST) echo $_POST['nome'];?>"><br><br>
			
			<label>CPF:</label>
			<input type="text" name="cpf" value="<?php if($_POST) echo $_POST['cpf'];?>"><br><br>
			
			<label>Data de Nascimento:</label>
			<input type="date" name="data" value="<?php if($_POST) echo $_POST['data'];?>"><br><br>
			
			<input type="submit" value="Cadastrar">
		</form>
	</body>
</html>