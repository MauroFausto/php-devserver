<!doctype html>
<html>
	<head>
		<title>Lista de Alunos</title>
	</head>
	<body>
	<?php
		if(isset($_GET["msg"]))
		{
			echo "<h3>{$_GET['msg']}</h3><br>";
		}
	?>
		<h2>Lista de Alunos</h2>
		<table border="1" id="aluno">
			<tr>
				<th>Id</th>
				<th>Nome</th>
				<th>CPF</th>
				<th>Data de Nascimento</th>
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
						echo "<td>{$dado->cpf}</td>";
						echo "<td>" . date("d/m/Y", strtotime($dado->dataNascimento)) . "</td>";
						
						echo "<td>
						<a href='index.php?controle=AlunoController&metodo=alterar&id={$dado->idaluno}'>Alterar</a>&nbsp;&nbsp;";
					?>
						
						<a href="index.php?controle=AlunoController&metodo=excluir&id=<?php echo $dado->idaluno;?>" onclick="return confirm('Confirma a exclusão do aluno?')">Excluir</a>
						
						</td>
						
						</tr>
			<?php
					}
				}
				else
					echo "<h2>$retorno</h2>";
			?>
		</table>
		<a href="index.php?controle=AlunoController&metodo=inserir">Novo Aluno</a>
		<script type="text/javascript" src="lib/jquery-latest.js"></script>	
		<script type="text/javascript" src="lib/jquery.quicksearch.js"></script>
		<script>
		$(document).ready(function()
		{ 
			 
			$("#aluno tbody tr").quicksearch({
				labelText: 'Procurar: ',
				attached: '#aluno',
				position: 'before',
				delay: 100,
				loaderText: 'Carregando...',
				onAfter: function() {
					if ($("#aluno tbody tr:visible").length != 0) {
						$("#aluno").trigger("update");
						$("#aluno").trigger("appendCache");
						
					}
				}
			});
		});
  </script>
	</body>
</html>