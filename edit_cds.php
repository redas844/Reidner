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

$sql = "SELECT id, nome, artista, estoque, ano, genero, gravadora, preco FROM cds where id =$id";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
		$id = $row["id"];
		$nome = $row["nome"];
		$artista = $row["artista"];
		$estoque = $row["estoque"];
		$ano = $row["ano"];
		$genero = $row["genero"];
		$gravadora = $row["gravadora"];
		$preco = $row["preco"];
		echo "
		<form action = update_cds.php method = post>
		
		 <input type = hidden name = id value = $id>
		 
    Nome do CD: <input type=text name=nome value = $nome><br>
	Artista: <input type=varchar name=artista value = $artista><br>
	Quantidade de estoque: <input type=varchar name=estoque value = $estoque><br>
	Ano: <input type=varchar name=ano value = $ano><br>
	Gênero: <input type=text name=genero value = $genero><br>
	Gravadora: <input type=text name=gravadora value = $gravadora><br>
	Preço: <input type=int name=preco value = $preco><br>

<br> <input type=submit value=Enviar>
</form>
";
		echo "<br>";
    }
} else {
    echo "0 resultados";
}


$conn->close();

?>