<!DOCTYPE html>
<html>
<head>
	<title>Guestbook</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Corey Koval, K3CPK">
	<meta name="application-name" content="Field Day Logging Database" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="outer_wrapper" class="grid">
		<header id="site_header" class="header">
			<div id="page_top" class="row">
				<?php include 'header.php';?>
			</div>
		</header>
		<hr>
		<div class="row">
			<div class="col-2">
				<?php include 'navbar.php';?>
			</div>
			<div id="inner_wrapper" class="col-10">
				<h4>To explore the full funtionality of the site and to log your contacts you will need an account.<br>
					Please fill in the information below:</h4>
				<form action="submitreg.php" method="POST">
					First Name:<br>
					<input type="text" name="first" /><br>
					Last Name:<br>
					<input type="text" name="last" /><br>
					Call Sign:<br>
					<input type="text" name="callsign" /><br>
					Operating Class:
					(Drop Down Menu Here)<br>					
					<input type="submit" /><br>
				</form>
			</div>
		</div>
	</div>
</body>
</html>