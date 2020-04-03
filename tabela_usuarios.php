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



<table  border="1" align="center">

	<tr>
	
    <td>ID</td>	
	<td>Email</td>
	<td>Senha</td>
	<td>NÃ­vel de Acesso</td>
	<td>Nome</td>
	<td>CPF</td>
	<td>Editar</td>
	<td>Excluir</td>
	
	</tr>
	
  
<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'lojadecds';


$conn = new mysqli($servidor, $usuario, $senha, $banco);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, email, senha, niveis_acesso, nome, cpf FROM login";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        $id = $row["id"];
		$email = $row["email"];
		$senha = $row["senha"];
		$niveis_acesso = $row["niveis_acesso"];
		$nome = $row["nome"];
		$cpf = $row["cpf"];
		echo "
		<tr>
		<td>&nbsp;$id</td>
		<td>&nbsp;$email</td>
		<td>&nbsp;$senha</td>
		<td>&nbsp;$niveis_acesso</td>
		<td>&nbsp;$nome</td>
		<td>&nbsp;$cpf</td>
		<td><a href=edit_usuarios.php?a=$id><img src=imagens/edit.png alt=edit/></a></td>
		<td><a href=delete_usuarios.php?a=$id><img src=imagens/delet.png alt=edit/></a></td>
		
		<tr> 
		";
		echo "<br>";
    }
} else {
    echo "0 resultados";
}


$conn->close();


?>
</table>
<br>
<center><a href="administrativo.php"/><font color="blue" size="4">Voltar</font></center>
</body>
</html>
