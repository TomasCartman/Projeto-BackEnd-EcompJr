<?php
session_start();
if($_SESSION['admin']==0){
	header("location:../index.php");
}

$flag = '';

if(isset($_GET['admin'])){
    if($_GET['admin']=='false'){
        $flag = "Não foi possivel tornar esse usuario um administrador";
    } else if($_GET['admin']=='true'){
    	$flag = "O usuario agora é um administrador";
    }
}

if(isset($_GET['adminRemoved'])){
    if($_GET['adminRemoved']=='false'){
        $flag = "Não foi possivel remover o poder de administrador desse usuario";
    } else if($_GET['adminRemoved']=='true') {
    	$flag = "O usuario não é mais um administrador";
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
	<div class="container">
		<a href="../index.php" class="btn btn-success">Voltar</a>
	</div>
	<form action="../routes/routes.php" method="POST">
		<div class="container">

			<label for="user"><b>Adicionar administrador</b></label>
    		<input type="text" placeholder="Nome de usuario" name="add_username" required>
    		<button type="submit" name="addAdmin" class="registerbtn">Adicionar</button>
		</div>
	</form>
	<form action="../routes/routes.php" method="POST">
		<div class="container">
			<label for="user"><b>Remover administrador</b></label>
    		<input type="text" placeholder="Nome de usuario" name="remove_username" required>
			<button type="submit" name="removeAdmin" class="registerbtn">Remover</button>
			<?php echo $flag; ?>
		</div>
	</form>
</body>
</html>