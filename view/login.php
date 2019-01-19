<?php
session_start();
$flag = '';

if(isset($_SESSION['auth'])){
	if($_SESSION['auth'] == true){
		header("location:../routes/routes.php");
    }
}

if(isset($_GET['valid'])){
    if($_GET['valid']=='false'){
        $flag = "Nome de usuario ou senha incorretos";
    }
}

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
			<h1>Login</h1>

			<?php echo $flag; ?>
			<hr>
			
			<label for="uname"><b>Nome de usuario</b></label>
		    <input type="text" placeholder="Seu nome de usuario" name="uname" required>

		    <label for="psw"><b>Senha</b></label>
		    <input type="password" placeholder="Sua senha" name="psw" required>


		    <button type="submit" name="loginAttempt">Login</button>
		    <label>
		</div>
	</form>
	<div class="container">
		    <p>Não possui uma conta? <a href="/view/register.php">registre-se aqui</a></p>
	</div>
</body>
</html>