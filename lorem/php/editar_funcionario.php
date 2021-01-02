<?php
include 'conexao.php';
$id = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Plano</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="cadastrocliente.css">
    <link rel="stylesheet" href="TesteCores/style.css">
</head>
<body>

      <div id="body">
        <div id="bloco">
<div class="container" id="editPlano">
<h4>Formulário de Edição</h4>
<form action="_atualizar_funcionarios.php" method="POST">
<?php
        $sql = "SELECT * FROM `cadastro` WHERE id_usuario = $id";
        $buscar = mysqli_query($conexao,$sql);
        while ($array = mysqli_fetch_array($buscar)) {

            $id_usuario = $array['id_usuario'];
            $email = $array['email'];

        }
    ?>

    
    <div class="form-group">
        <label>Nome do Funcionário</label>
        <input type="text" class="form-control" id="contratoCliente" name="email" value="<?php echo $email ?>" >
        <input type="text" class="form-control" id="contratoCliente" name="id" value="<?php echo $id_usuario ?>" style="display: none" >
      </div>

      

      <div id="btnSubmit">
      <button type="submit" class="btn btn-success">Editar</button>&nbsp;
    </div>
    </div>
      </div>
      </div>
    </form>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>