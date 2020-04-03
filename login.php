<?php
	session_start();
	$arraycarrinho = array();
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
  <body background="imagens/wallpaper2.jpg"> 
    <div class="container">

      <form class="form-signin" method="POST" action="valida.php">
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
        <h2 class="form-signin-heading"><font color="red" face="Broadway" size="15">Login</font></h2>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
        <button class="btn btn-lg btn-danger btn-block" type="submit">Acessar</button><br>
		<center><h3><span style="font-family:lucida sans unicode,lucida grande,sans-serif;">​​</span><font color="red" size="6">Crie sua conta Abaixo! </font></h3>
			<a href="cadastro_cliente.php"/><font color="red" size="5">Cadastre-se</font></button></center>
      </form>
	  <p class="text-center text-danger">
			<?php if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
			}?>
		</p>
		<p class="text-center text-success">
			<?php 
			if(isset($_SESSION['logindeslogado'])){
				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);
			}
			?>
		</p>
    </div> 
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
