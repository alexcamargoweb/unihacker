<?php

 if (isset($_POST['email']) && isset($_POST['senha'])) {
	 
	// Recebe os dados do formulário 
    $email  = $_POST['email'];
    $senha  = $_POST['senha'];

	// Abre conexão com o banco de dados
	$conn   = mysqli_connect('127.0.0.1', 'unihacker', 'UnIh@CkEr', 'unihacker');
	// Define o charset
	mysqli_set_charset($conn, "utf8");
	// Constrói a query
    $query  = "SELECT email, senha 
			  FROM usuarios 
			  WHERE email = '".mysqli_real_escape_string($conn, $email)."' 
			  AND senha = PASSWORD('".mysqli_real_escape_string($conn, $senha)."') 
			  LIMIT 1";  		  
    
	// Executa a query
	$result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result)) {
        //Se estiver tudo ok
        echo "<span style='color: green'> Login efetuado com sucesso </span> <br /><br />";
    } else {
        //Se a senha estiver errada
        echo "<span style='color: red'> E-mail ou senha incorretos </span> <br /><br />";
    }
 }  

?>

<html>

<head>
<title>Universidade Hacker - Broken authentication</title>
</head>

<body style="font-family: Tahoma; font-size:12px;">
	
<form method="post" action="broken_authentication.php" name="entrar">
   
  <div style="border: 3px solid #555; width: 400px; height: 175px; padding:15px;">
  
    <span style='font-weight:bold'>Universidade HaCkEr - Área do aluno</span>
    <br /><br />
    <span>E-mail: </span><input type='text' name='email' style='width:200px;' />  
    <br /><br />
    <span>Senha: </span><input type='password' name='senha' style='width:200px;' /> 
    <br /><br />
    <input name="entrar" type="submit" value="Entrar" />
  
  </div>
  
</form> 

</body>

</html>
