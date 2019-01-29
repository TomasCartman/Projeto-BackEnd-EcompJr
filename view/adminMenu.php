<?php
require_once("../model/Communication.class.php");
session_start();

if($_SESSION['admin']==0){
	header("location:../index.php");
}

$com = new Communication(null, null, null, null);
$msgs = $com->getAllMessages();
if(isset($_GET['unread'])){
	if($_GET['unread']=='true'){
		$msgs = $com->getMessages();
	}
}
//var_dump($msgs);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="/view/Vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="/view/Assets/css/adminMenu.css">
	<title>ConsultAgroJr</title>
</head>
<body>
	<div class="container">
		<h1>Mensagens</h1>
		<a href="/view/adminMenu.php" class="btn btn-success">Todas as mensagens</a>
		<a href="/view/adminMenu.php?unread=true" class="btn btn-success">Apenas não lidas</a>
		<a href="../index.php" class="btn btn-success">Voltar</a>
		<?php 
			for($i = 0; $i < sizeof($msgs); $i++){
				echo '<div class="info">';
					echo '
					<div class="row">
						<div class="col-1">
							<p class="id">'; echo $msgs[$i]["Id"]; echo '</p>
						</div>
						<div class="col-2">
							<p>'; echo 'Nome: '; echo $msgs[$i]["name"]; echo '</p>
						</div>
						<div class="col-3">
							<p>'; echo 'Email: '; echo $msgs[$i]["email"]; echo '</p>
						</div>
						<div class="col-4">
							<p>'; echo 'Assunto: '; echo $msgs[$i]["subject"]; echo '</p>
						</div>
						<div class="col-1">
							<button class="btn btn-success btn-read" id="btn'; echo $msgs[$i]["Id"]; echo '">Marcar como lida</button>
						</div>
					</div>'; 
					echo '<hr>';
					echo 
						'<div class="row">
							<div class="offset-2">
								<div class="msg">
								<p>'; echo $msgs[$i]["text"]; echo '</p>
								</div>
							</div>
						</div>';
				echo '</div>';
			}
		?>
	</div>
	<script src="/view/Vendor/js/jquery.min.js"></script>
	<script src="/view/Assets/js/admin.js"></script>
</body>
</html>