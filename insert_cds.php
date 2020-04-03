<?php
    include_once("conexao.php");
    $nome = $_POST['nome'];
	$artista = $_POST['artista'];
	$estoque = $_POST['estoque'];
	$ano = $_POST['ano'];
	$genero = $_POST['genero'];
	$gravadora = $_POST['gravadora'];
	$preco = $_POST['preco'];
   
    //echo "$nome_usuario - $email_usuario";
    
    $result_usuario = "INSERT INTO cds (nome, artista, estoque, ano, genero, gravadora, preco) VALUES ('$nome', '$artista', '$estoque', '$ano', '$genero', '$gravadora', '$preco')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
 
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
	<body background="imagens/wallpaper..jpg">
	</body>
	<center>
	<font color="white" size="6"><h1>CD cadastrado com sucesso!</h1></font>
	<a href="administrativo.php"/><font color="blue" size="4">Voltar</font>
	</center>
</html>
