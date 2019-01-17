<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="/view/Vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="/view/Assets/css/login.css">
	<title>ConsultAgroJr</title>
</head>
<body>
	<form action="../routes/routes.php" method="POST">
  <div class="container">
    <h1>Cadastro</h1>
    <p>Por favor, preencha os campos abaixo para criar uma conta</p>
    <hr>

    <label for="user"><b>Usuario</b></label>
    <input type="text" placeholder="Digite seu nome de usuario" name="reg_username" required>

    <label for="psw"><b>Senha</b></label>
    <input type="password" placeholder="Digite sua senha" name="reg_psw" required>

    <label for="psw-repeat"><b>Confirme a senha</b></label>
    <input type="password" placeholder="Repita a senha" name="reg_psw_repeat" required>
    <hr>

    <button type="submit" name="registerAttempt" class="registerbtn">Cadastrar</button>
  </div>

  <div class="container signin">
    <p>Ja possui uma conta? <a href="/view/login.php">Entrar</a></p>
  </div>
</form>
</body>
</html>