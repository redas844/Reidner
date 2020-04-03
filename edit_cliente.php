<?php
$id = $_GET['a'];


$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'lojadecds';


$conn = new mysqli($servidor, $usuario, $senha, $banco);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, email, senha, nome, cpf FROM login where id =$id";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
		$id = $row["id"];
		$email = $row["email"];
		$senha2 = $row["senha"];
		$nome = $row["nome"];
		$cpf = $row["cpf"];
		echo "
		<form action=update_cliente.php method=post>
		 <input type=hidden name=id value = $id>
  <center>  
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <h1>Meus dados</h1>
  <br>
  Email: <input type=varchar name=email value = $email><br>
  <br>
  Senha: <input type=varchar name=senha value = $senha><br>
  <br>
  Nome: <input type=text name=nome value = $nome><br>
  <br>
  CPF: <input type=varchar name=cpf value = $cpf><br>
  <br> 
<input type=submit value=Atualizar>
</center>
</form>
";
		echo "<br>";
    }
} else {
    echo "0 resultados";
}


$conn->close();

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
<center><a href="cliente.php"/><font color="blue" size="4">Cancelar</font></center>
</body>
</html>