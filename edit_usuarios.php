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

$sql = "SELECT id, email, senha, niveis_acesso, nome, cpf FROM login where id =$id";
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
		<form action = update_usuarios.php method = post>
		
		 <input type = hidden name = id value = $id>
		 
    email: <input type=text name=email value = $email><br>
	Senha: <input type=varchar name=senha value = $senha><br>
	Nivel de Acesso: <input type=niveis_acesso name=niveis_acesso value = $niveis_acesso><br>
	Nome: <input type=varchar name=nome value = $nome><br>
	CPF: <input type=text name=cpf value = $cpf><br>
	

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