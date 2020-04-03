<?php

$email = $_POST['email'];
$senhaadm = $_POST['senha'];
$nivel_acesso = 1;
$nome = $_POST['nome'];
$CPF = $_POST['cpf'];

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'lojadecds';


$conn = new mysqli($servidor, $usuario, $senha, $banco);

$stmt = $conn->prepare("INSERT INTO login (email, senha, niveis_acesso, nome, cpf) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssiss", $email,$senhaadm,$nivel_acesso,$nome,$CPF);


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
	<font color="white" size="6"><h1>Administrador cadastrado com sucesso!</h1></font>
	<a href="administrativo.php"/><font color="blue" size="4">Voltar</font>
	</center>
</html>

