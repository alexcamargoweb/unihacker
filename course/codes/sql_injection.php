<?php

// Abre conexão com o banco de dados
$conn = mysqli_connect('127.0.0.1', 'unihacker', 'UnIh@CkEr', 'unihacker');
// Define o charset
mysqli_set_charset($conn, "utf8");

// Faz a consulta ao banco (COM VULNERABILIDADE) ' OR 1=1 --'
//$query = "SELECT * FROM alunos WHERE matricula = '".$_GET['matricula']."'";

// Faz a consulta ao banco (SEM VULNERABILIDADE) ' OR 1=1 --'
$query = "SELECT * FROM alunos WHERE matricula = '".mysqli_real_escape_string($conn, $_GET['matricula'])."'";  

// Executa a query
$result = mysqli_query($conn, $query);

?>

<style>
.dados{
	padding: 10px;
}
.negrito{
	font-weight: bold;
}
</style>

<html>
<head>
<title>Universidade Hacker - SQL injection</title>
</head>
<body style="font-family: Tahoma; font-size:12px;"> 
  <div style="border: 3px solid #555; width: 600px; padding:15px;">  
    <span style='font-weight:bold'>Universidade HaCker - Dados do aluno</span>
    <br /><br />    
	<table>
		<tr>
			<td class="dados negrito">Matrícula</td>
			<td class="dados negrito">Nome</td>
			<td class="dados negrito">Curso</td>
			<td class="dados negrito">Média</td>
		</tr>
		<?php 
			while($row = mysqli_fetch_assoc($result)){
		?>		
			<tr>
				<td class="dados"><?php print($row['matricula']); ?></td>
				<td class="dados"><?php print($row['nome']); ?></td>
				<td class="dados"><?php print($row['curso']); ?></td>
				<td class="dados"><?php print($row['media']); ?></td>
			</tr>
		<?php
			}
		?>	
	</table>
</body>
</html>
