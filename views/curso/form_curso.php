<!doctype html>
<html>
	<head>
		<title>Cadastro de Curso</title>
	</head>
	<body>
		<h2>Cadastro de Curso</h2>
		<form action="#" method="post">
			<label>Nome:</label>
			<input type="text" name="nome" value="<?php if($_POST) echo $_POST['nome'];?>"><br><br>
			<input type="submit" value="Cadastrar">
		</form>
	</body>
</html>