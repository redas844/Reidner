<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';

$conn = new mysqli($servidor, $usuario, $senha);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "CREATE DATABASE lojadecds";

if ($conn->query($sql) === TRUE) {
    die ("Banco de dados criado com sucesso");
} else {
    echo "Erro ao criar banco de dados: " . $conn->error;
}

$conn->close();
?>
