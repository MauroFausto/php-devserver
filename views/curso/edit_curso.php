<!doctype html>
<html>
	<head>
		<title>Cadastro de Curso</title>
	</head>
	<body>
		<h2>Alterar o Cadastro do Aluno</h2>
		<form action="#" method="post">
			<input type="hidden" name="idaluno" value="<?php echo $ret[0]->idaluno;?>">
			
            <label>Nome:</label>
			<input type="text" name="nome" value="<?php echo $ret[0]->nome;?>"><br><br>
			
			<input type="submit" value="Alterar">
		</form>
	</body>
</html>