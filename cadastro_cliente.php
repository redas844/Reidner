<html>
<meta charset="utf-8">
    <head>
        <title>Loja de CDs</title>
			<link href="css/bootstrap.css" rel="stylesheet">
			<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
			<link href="css/signin.css" rel="stylesheet">
			<link rel="icon" href="imagens/icon.png">
			<script src="js/ie-emulation-modes-warning.js"></script>
	
    </head>
    <body>
	<body background="imagens/cds.jpg">
	
	<form class="form-signin" method="POST" action="insert_cliente.php">
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
        <h2 class="form-signin-heading"><font color="white" face="Broadway" size="6">Cadastre-se</font></h2>
		<label for="inputNome" class="sr-only">Nome</label>
        <input type="text" name="nome" id="inputNome" class="form-control" placeholder="Digite seu nome completo" required autofocus><br>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Digite um Email" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Escolha uma senha forte" required>
		<label for="inputCPF" class="sr-only">CPF</label>
        <input type="text" name="cpf" id="inputCPF" class="form-control" placeholder="Digite o seu CPF" required autofocus><br>
        <button class="btn btn-lg btn-danger btn-block" type="submit">Cadastrar</button><br>
      </form>
		
    </body>
	<center><a href="login.php"/><font color="red" size="4">Voltar</font></center>
</html>