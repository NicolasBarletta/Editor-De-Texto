<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>


    <link rel="stylesheet" href="./login.css">
    <link rel="stylesheet" href="css/TesteCores/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="container" id="contCadastro">
<div class="container" id="containerlogin">
<center>
<img src="chave.png" id="cadeado">
</center>

<h4>Cadastro de Usuário</h4>
<form action="php/insert_usuario.php" method="POST">
<div class="form-group">
<label>Email</label>
<input type="text" name="email" class="form-control" required autocomplete="off" placeholder="Digite seu Nome Completo">
</div>

<div class="form-group">
<label>Senha</label>
<input type="password" name="senha" id="txtSenha" class="form-control" required autocomplete="off" placeholder="Digite sua Senha">
</div>

<div class="form-group">
<label>Confirma Senha</label>
<input type="password" name="confSenhausuario" class="form-control" required autocomplete="off" placeholder="Digite sua Senha Novamente" oninput="validaSenha(this)">
<small>Precisa ser igual a senha digitada acima.</small>
</div>

<div style="text-align: right" id="botoes">
<a href="login.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
<button type="submit" class="btn btn-sm btn-success">Cadastrar</button>

</div>

</form>

</div>
</div>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script>
function validaSenha (input){ 
	if (input.value != document.getElementById('txtSenha').value) {
    input.setCustomValidity('Repita a senha corretamente');
  } else {
    input.setCustomValidity('');
  }
} 
</script>
</body>
</html>