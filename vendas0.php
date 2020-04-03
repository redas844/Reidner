<head>
<link href="css/gerente.css" rel="stylesheet">
</head>


<br>
<br>
<br>
<table  class="tabela" >

	<tr>

    <th >cpf do cliente</th>	
	<th >chassi do veículo</th>
	<th >funcionario</th>
	<th >pagamento</th>
	<th >servicos</th>
	<th >desconto</th>
	<th >total</th>

	</tr>
	
  
<div class="botaotopo">
<a href="veiculos.php" title="">Tabela de Vendas</a>
</div>

<br></br>
<br></br>
  <?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'lojadecds';


$conn = new mysqli($servidor, $usuario, $senha, $banco);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, cpf, chassi, funcionario, pagamento, servicos, desconto, total FROM vendas";
$result = $conn->query($sql);



if ($result->um_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        $cpf = $row["cpf"];
		$chassi = $row["chassi"];
		$funcionario = $row["funcionario"];
		$pagamento = $row["pagamento"];
		$servicos = $row["servicos"];
		$desconto = $row["desconto"];
		$total = $row["total"];
		$id = $row["id"];
		echo "
		<tr>
		<td>&nbsp;$cpf</td>
		<td>&nbsp;$chassi</td>
        <td>&nbsp;$funcionario</td>
        <td>&nbsp;$pagamento</td>
		<td>&nbsp;$servicos</td>
		<td>&nbsp;$desconto</td>
		<td>&nbsp;$total</td>	
		
		<tr> 
		";
		echo "<br>";
    }
} else {
    echo "0 resultados";
}


$conn->close();


?>

<div class="botao10">
<a href="cliente.php" title=""> Voltar</a>
</div>
