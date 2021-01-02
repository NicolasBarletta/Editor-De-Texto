<?php
include 'conexao.php';
$id = $_POST['id'];
$email = $_POST['email'];

 $sql = "UPDATE `cadastro` SET `email`= '$email' WHERE id_usuario = $id";
 $atualizar = mysqli_query($conexao,$sql);
 header("Location: main.php");
?>
