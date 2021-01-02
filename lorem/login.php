<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="container" id="containerlogin">
    <div style="padding: 10px">
    <center>
<img src="cadeado.png" id="cadeado">
</center>
    <form action="main.php" method="POST">
        <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" placeholder="Nome de Usuário" autocomplete="off" required>
</div>
        <div class="form-group">
            <label>Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off" required>
</div>
    
    <div id="contBotao">
    <a href="cadastro_usuario.php"><button type="button" class="btn btn-sm btn-info">Cadastrar</button></a>
<button type="submit" class="btn btn-sm btn-success">Entrar</button>

</div>
</div>
</div>

<div style="margin-top: 10px">

</div>
</form>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>