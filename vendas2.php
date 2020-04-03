<head>
<link href="css/gerente.css" rel="stylesheet">
</head>



<table  class="tabela" >

	<tr>

    <th >Modelo</th>	
	<th >Ano</th>
	<th >Chassi</th>
	
	

	</tr>
	
  <center> <div class="texto2">Selecione o veículo </div></center>
  <?php
  
  $cpf = $_GET['cpf'];


$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'lojadecds';


$conn = new mysqli($servidor, $usuario, $senha, $banco);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, modelo, ano, chassi FROM veiculo";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        $modelo = $row["modelo"];
		$ano = $row["ano"];
		$chassi = $row["chassi"];
		$id = $row["id"];
		echo "
		<tr>
		<td>&nbsp;$modelo</td>
        <td>&nbsp;$ano</td>
		<td>&nbsp;$chassi</td>
		<td ><a href=venda.php?chassi=$chassi&cpf=$cpf> Selecionar</a></td>	
		
		<tr> 
		";
		echo "<br>";
    }
} else {
    echo "0 resultados";
}

$conn->close();


?>

<center> <div class="texto1">O CPF do cliente foi selecionado com sucesso! (<?php echo  $cpf;?>) </div></center>