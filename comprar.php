<?php
    include_once("conexao.php");
    $id = $_POST['ID'];
	$id_cliente = $_POST['Id_cliente'];
	$id_produto = $_POST['Id_produto'];
	$preco = $_POST['preco'];
	$quatidade = $_POST['quatidade'];
	
   

    
    $result_usuario = "INSERT INTO cds (id, id_cliente, id_produto, preco, quatidade) VALUES ('$id', '$id_cliente', '$id_produto', '$preco', '$quatidade')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
 
?>

