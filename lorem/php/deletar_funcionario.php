<?php
include 'conexao.php';
$id = $_GET['id'];
$sql = "DELETE FROM `cadastro` WHERE id_usuario = $id";
$deletar = mysqli_query($conexao,$sql);
header("Location: main.php");
?>
