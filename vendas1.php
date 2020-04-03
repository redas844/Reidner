<head>
<link href="css/gerente.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<table  class="tabela">

	<tr>

    <th >Nome</t>	
	<th >CPF</th>
	
	

	</tr>
	
  <center> <div class="texto2">Selecione o cliente</div></center>
  <?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'lojadecds';


$conn = new mysqli($servidor, $usuario, $senha, $banco);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT nome, cpf FROM cliente";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        $nome = $row["nome"];
		$cpf = $row["cpf"];
		echo "
		<tr>
		<td>&nbsp;$nome</td>
		<td>&nbsp;$cpf</td>
		<td ><a href=vendas2.php?cpf=$cpf>Selecionar</a></td>
		
		<tr> 
		";
		echo "<br>";
    }
} else {
    echo "0 resultados";
}


$conn->close();


?>