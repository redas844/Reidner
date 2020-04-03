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

<?php

	session_start();

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'lojadecds';


$conn = new mysqli($servidor, $usuario, $senha, $banco);
$id_cd = $_GET['id'];
$quantidade =0 ;
$preco = 0;

//SELECT preço

$sql = "SELECT * FROM cds WHERE id='$id_cd'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        $preco = $row["preco"];
		  
    }
} else {
    echo "";
}


?>

<body>
<body background="imagens/wallpaper..jpg"> 
<form method="post" action="finalizar.php">

<center>
ID do cliente:<br>
<input type="int" name="id_cliente" value="<?php echo $_SESSION['usuarioId'];	?>" readonly=“t”>
<br>	
<br>
ID do CD:<br>
<input type="int" name="id_cd" value="<?php echo $id_cd;	?>" readonly=“te”>
<br>
<br>
Nome do cliente:<br>
<input type="text" name="nome_cliente" value="<?php echo $_SESSION['usuarioNome'];	?>" readonly=“tr”>
<br>
<br>
Quantidade:<br>
<input type="int" name="quantidade" value="<?php echo  $quantidade;?>">
<br>
<br>
Preço:<br>
<input type="int" name="preco" value="<?php echo $preco;?>"readonly=“tr”>
<br>
<br>
<button class="btn btn-lg btn-danger" type="submit">Finalizar</button><br>
</form>
<br>
<br>
<a href="cliente.php" class="btn btn-primary" role="button">Voltar</a>
</center>
</body>
</html>





