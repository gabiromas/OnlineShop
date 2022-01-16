<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Inregistrare</title>
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
					<li><a href="Autentificare.php">Autentificare</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="INDEX">
			<h1>Bine ai venit!</h1>
			<form method="POST" action="Includes/Inregistrare.inc.php">
				<input type="text" name="nume" placeholder="Nume">
				<input type="text" name="prenume" placeholder="Prenume"> <br>
				<input type="text" name="username" placeholder="Username">
				<input type="password" name="password" placeholder="Parola"><br>
				<input type="submit" name="Log In" value="Trimite">
			</form>
			<br>
			<?php 
				if (isset($_GET['info']) && $_GET['info'] == 'Felicitari') {
					echo '<p style="text-align: center; color: lightgreen; font-size: 25px">Contul a fost creat cu SUCCES!</p>';
				} else if (isset($_GET['info']) && $_GET['info'] == 'Eroare') {
					echo '<p style="text-align: center; color: red; font-size: 25px">Contul nu a putut fi creat!</p>';
					echo '<p style="text-align: center; color: white; font-size: 20px">Va rugam sa competati toate chenarele!</p>';
				} else if (isset($_GET['info']) && $_GET['info'] == 'exista') {
					echo '<div style= "color: red"><p style="text-align: center; color: yellow; font-size: 25px">Username-ul este deja utilizat, v-a trebui sa alegeti altul!</p></div>';
				}
			 ?>
		</div>		
	</div>
</body>
</html>