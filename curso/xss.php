<?php

// Abre conexão com o banco de dados
$conn = mysqli_connect('127.0.0.1', 'unihacker', 'UnIh@CkEr', 'unihacker');
// Define o charset
mysqli_set_charset($conn, "utf8");

// Faz a consulta ao banco 
$query = "SELECT * FROM recados";

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
<title>Universidade Hacker - Cross-site scripting</title>
</head>
<body style="font-family: Tahoma; font-size:12px;"> 
  <div style="border: 3px solid #555; width: 600px; padding:15px;">  
    <span style='font-weight:bold'>Universidade HaCker - Recados universitários</span>
    <br /><br />    
	<table>
		<?php 
			while($row = mysqli_fetch_assoc($result)){
		?>		
			<tr>
				<td class="dados">
					<strong><?php print($row['aluno']); ?></strong> 
					<br />
					<?php print($row['titulo']); ?> 
					<br />
					<?php 
						// Exibir sem escapar a saída (COM VULNERABILIDADE)
						//print($row['descricao']);
						// Exibe as tags HTML sem interpretá-las
						//print(htmlspecialchars($row['descricao']));
						// Exibe sem as tags HTML 
						print(strip_tags($row['descricao']));
					?> 
					<br />
				</td>
			</tr>
		<?php
			}
		?>	
	</table>
</body>
</html>
