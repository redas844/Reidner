<?php

$email = $_POST['email'];
$senhacli = $_POST['senha'];
$nivel_acesso = 2;
$nome = $_POST['nome'];
$CPF = $_POST['cpf'];

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'lojadecds';


$conn = new mysqli($servidor, $usuario, $senha, $banco);

$stmt = $conn->prepare("INSERT INTO login (email, senha, niveis_acesso, nome, cpf) VALUES (?, ?, ?, ?, ?)");
$stmt = $conn->bind_param("ssiss", $email, $senhacli, $nivel_acesso, $nome, $CPF);


$stmt->execute();



$stmt->close();
$conn->close();
?>
<html>
    <head>
        <title>Loja de CDs</title>
			<link href="css/bootstrap.css" rel="stylesheet">
			<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
			<link href="css/signin.css" rel="stylesheet">
			<link rel="icon" href="imagens/icon.png">
			<script src="js/ie-emulation-modes-warning.js"></script>

    </head>
    <body>
	<body background="imagens/wallpaper.jpg">
	</body>
	<center>
	<font color="white" size="6"><h1>Usuário cadastrado com sucesso!</h1></font>
	<h2><font color="white" size="4">Para navegar no site, volte para a página de </font><a href="login.php"/><font color="blue" size="4">login</font></h2>
	</center>
</html>
