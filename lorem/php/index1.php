<?php 

include 'conexao.php';
include 'script/password.php';

$email = $_POST['email'];
$senhausuario = $_POST['senha'];

$sql = "SELECT email,senha FROM cadastro WHERE email = '$email'";
$buscar = mysqli_query($conexao,$sql);

$total = mysqli_num_rows($buscar);

while ($array = mysqli_fetch_array($buscar)) {
    
$senha = $array['senha'];

 $senhadecodificada = sha1($senhausuario);
 
 if ($total > 0) {

    if($senhadecodificada == $senha) {
        header('Location: main.php');
} else {
    header('Location: index.php');
} 

} else {
    header('Location: index.php');
}

}

?>

 