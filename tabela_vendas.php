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
	<td>ID do Cliente</td>
	<td>ID do CD</td>
	<td>Nome do cliente</td>
	<td>Quantidade</td>
	<td>Preço</td>

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

$sql = "SELECT id, id_cliente, id_cd, nome_cliente, quantidade, preco FROM vendas";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        $id = $row["id"];
		$id_cliente = $row["id_cliente"];
		$id_cd = $row["id_cd"];
		$nome_cliente = $row["nome_cliente"];
		$quantidade = $row["quantidade"];
		$preco = $row["preco"];
		echo "
		<tr>
		<td>&nbsp;$id</td>
		<td>&nbsp;$id_cliente</td>
		<td>&nbsp;$id_cd</td>
		<td>&nbsp;$nome_cliente</td>
		<td>&nbsp;$quantidade</td>
		<td>&nbsp;$preco</td>
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

