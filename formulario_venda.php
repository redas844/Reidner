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
	
	<form class="form-signin" method="POST" action="insert_cds.php">
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
        <h2 class="form-signin-heading"><font color="white" size="6">informaçoes</font></h2>
		<label for="inputNome" class="sr-only">Nome de usuario</label>
        <input type="text" name="nome" id="inputNome" class="form-control" placeholder="nome de usuario" required autofocus ><br>
        <label for="inputArtista" class="sr-only">Quantidade</label>
        <input type="varchar" name="artista" id="inputArtista" class="form-control" placeholder="quantidade desejada" required autofocus><br>
		<label for="inputNome" class="sr-only">Nome do cd </label>
        <input type="text" name="nome" id="inputNome" class="form-control" placeholder="nome do cd" required autofocus ><br>
        <label for="inputEstoque" class="sr-only">...</label>
       
        <button class="btn btn-lg btn-danger btn-block" type="submit">compra</button><br>
      </form>
		
    </body>
	<center><a href="administrativo.php"/><font color="blue" size="4">Voltar</font></center>
</html>