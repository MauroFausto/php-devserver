<!doctyp html>
<html>
	<head>
		<title>Lista de Cursos</title>
	</head>
	<body>
		<h2>Lista de Cursos</h2>
		<table border="1">
			<tr>
				<th>Id</th>
				<th>Curso</th>
			</tr>
			<?php
				if(is_array($retorno))
				{
					foreach($retorno as $dado)
					{
						echo "<tr>";
						echo "<td>{$dado->idcurso}</td>";
						echo "<td>{$dado->nome}</td>";
						echo "</tr>";
					}
				}
				else
					echo "<h2>$retorno</h2>";
			?>
		</table>
	</body>
</html>