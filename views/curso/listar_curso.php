<!doctype html>
<html>
	<head>
		<title>Lista de Cursos</title>
	</head>
	<body>
	<?php
		if(isset($_GET["msg"]))
		{
			echo "<h3>{$_GET['msg']}</h3><br>";
		}
	?>
		<h2>Lista de Cursos</h2>
		<table border="1" id="curso">
			<tr>
				<th>Nome do Curso</th>
				<th>Ações</th>
			</tr>
			<?php
				if(is_array($retorno))
				{
					foreach($retorno as $dado)
					{
						echo "<tr>";
						echo "<td>{$dado->idaluno}</td>";
						echo "<td>{$dado->nome}</td>";						
						echo "<td><a href='index.php?controle=CursoController&metodo=alterar&id={$dado->idcurso}'>Alterar</a>&nbsp;&nbsp;";
			?>
						<a href="index.php?controle=CursoController&metodo=excluir&id=<?php echo $dado->idcurso;?>" onclick="return confirm('Confirma a exclusão do curso?')">Excluir</a>
					</td>		
                </tr>
			<?php
					}
				}
				else
					echo "<h2>$retorno</h2>";
			?>
		</table>
		<a href="index.php?controle=CursoController&metodo=inserir">Novo Curso</a>
		<script type="text/javascript" src="lib/jquery-latest.js"></script>	
		<script type="text/javascript" src="lib/jquery.quicksearch.js"></script>
		<script>
		$(document).ready(function()
		{ 			 
			$("#cuso tbody tr").quicksearch({
				labelText: 'Procurar: ',
				attached: '#curso',
				position: 'before',
				delay: 100,
				loaderText: 'Carregando...',
				onAfter: function() {
					if ($("#curso tbody tr:visible").length != 0) {
						$("#curso").trigger("update");
						$("#curso").trigger("appendCache");						
					}
				}
			});
		});
  </script>
	</body>
</html>