<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha2 = "";
	$dbname = "lojadecds";
	
	$id =  $_POST['id'];
	$email = $_POST['email'];
	$nome = $_POST['nome'];
	$senha = $_POST['senha'];
	$cpf = $_POST['cpf'];
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha2, $dbname);
	
	//$nome_usuario = "";
	
	$result_usuario = "UPDATE login SET email = '$email', senha = '$senha', nome ='$nome', cpf ='$cpf' WHERE id = $id";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
?>

<html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Informática">
    <link rel="icon" href="imagens/icon.png">

    <title>Loja de CDs</title>
	
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>
  
<body>
<body background="imagens/wallpaper2.png">

<br>
<br>
<br>
<br>
<br>
<br>

<center><h1>Atualizado com sucesso!</h1><center>
<center><a href="cliente.php"/><font color="blue" size="4">Voltar</font></center>
</body>
</html>