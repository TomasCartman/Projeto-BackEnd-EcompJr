<?php
require_once("../model/Communication.class.php");

$com = new Communication(null, null, null, null);
$msgs = $com->getAllMessages();
var_dump($msgs);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="/view/Vendor/css/bootstrap.min.css">
	<title>ConsultAgroJr</title>
</head>
<body>
	<div class="container">
		<!--
		<div class="row">
			<div class="col-1">
				<p></p>
			</div>
			<div class="col-2">
				<p></p>
			</div>
			<div class="col-2">
				<p></p>
			</div>
			<div class="col-7">
				<p></p>
			</div>
		</div>
		<div class="row">
			<p></p>
		</div>
	-->
		<?php 
			//var_dump($msgs["text"]);
			for($i = 0; $i < sizeof($msgs); $i++){
				echo '
				<div class="row">
					<div class="offset-2 col-1">
						<p>'; echo $msgs[$i]["Id"]; echo '</p>
					</div>
					<div class="col-2">
						<p>'; echo $msgs[$i]["name"]; echo '</p>
					</div>
					<div class="col-3">
						<p>'; echo $msgs[$i]["email"]; echo '</p>
					</div>
					<div class="col-2">
						<p>'; echo $msgs[$i]["subject"]; echo '</p>
					</div>
				</div>
				<div class="row">
					<div class="offset-2">
						<p>'; echo $msgs[$i]["text"]; echo '</p>
					</div>
				</div>';
			}
		?>
	</div>
</body>
</html>