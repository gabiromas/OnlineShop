<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Autentificare</title>
</head>

<body>
	<div class="header">
		<div class="container">
			<div class="logo">
				<a href="Index.php" class="las la-store-alt la-5x">Shop</a>
			</div>
			<div class="nav">
				<ul>
					<li><a href="Index.php">Acasa</a></li>
					<li><a href="Inregistrare.php">Înregistrare</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="INDEX">
			<h1>Bine ai venit!</h1>
			<form method="POST" action="Includes/Autentificare.inc.php">
				<input type="text" name="username" placeholder="Username"><br>
				<input type="password" name="parola" placeholder="Parola"><br>
				<input type="submit" name="Log In" value="Trimite">
			</form>
			<?php
				if (isset($_GET['info']) && $_GET['info'] == 'gresit') {
					echo '<p style="text-align: center; color: red; font-size: 25px">Parola e gresita!</p>';
				}
			?>
		</div>		
	</div>
</body>
</html>