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


$sql = "DELETE FROM cds WHERE id=$id";

if (mysqli_query($conn, $sql)) {
      echo "Record updated successfully";
   } else {
      echo "Error updating record: " . mysqli_error($conn);
   }

mysqli_close($conn);

header("Location: tabela_cds.php");
?>