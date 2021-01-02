<?php
include 'conexao.php';
include 'script/password.php';

$email = $_POST['email'];
$senha = $_POST['senha'];


$sql = "INSERT INTO usuarios (email,senha) values ('$email',sha1('$senha'))";
$inserir = mysqli_query($conexao, $sql);
header("Location: index.php");
?>
