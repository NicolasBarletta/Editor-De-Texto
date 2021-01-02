<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição </title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/TesteCores/style.css">
    <link rel="stylesheet" href="../css/cadastrocliente.css">
</head>
<body>
      <div id="body">
        <div id="bloco">
    <div class="container" id="container" style="margin-top: 40px">
    
    <h3>Usuário</h3>
    <br>
    <table class="table">
  <thead>
    <tr>
    <th scope="col">Email</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
      <tr>
        <?php
include 'conexao.php';
$sql = "SELECT * FROM `cadastro`";
$busca = mysqli_query($conexao,$sql);
    while($array = mysqli_fetch_array($busca)) {

        $id_usuario = $array['id_usuario'];
        $email = $array['email'];
    
        ?>
        <tr>
        <td><?php echo $email ?></td>
        
        <td><a class="btn btn-warning" href="editar_funcionario.php?id=<?php echo $id_usuario ?>" role="button"><i class="fas fa-edit"></i>&nbsp;Editar</a>
        <a class="btn btn-danger" href="deletar_funcionario.php?id=<?php echo $id_usuario ?>" role="button"><i class="fas fa-trash-alt"></i>&nbsp;Excluir</a></td>
    </tr>
<?php } ?>
</table>
    </div>
    </div>
    </div>    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>