<?php 
//Conectare la baza de date
require('Conectare.php');

//Verificare pentru casute necompletate
if (!empty($_POST['nume']) && !empty($_POST['prenume']) && !empty($_POST['username']) && !empty($_POST['password']) && isset($_POST['nume']) && isset($_POST['prenume']) && isset($_POST['username']) && isset($_POST['password'])) {
	//Preluare date introduse
	$nume = $_POST['nume'];
	$prenume = $_POST['prenume'];
	$username = strtolower($_POST['username']);
	$password = $_POST['password'];


	//Folosim Hash pentru ascunderea parolei in baza de date
	$password_hashed = password_hash($password, PASSWORD_DEFAULT);

	//Verificare daca doua username sunt la fel
	$sql = "SELECT username FROM users WHERE username = '$username'";
	$result = mysqli_query($conectare, $sql);
	//Cautare username
	$check = mysqli_num_rows($result);
	if ($check > 0) {
		header("Location: ../Inregistrare.php?info=exista");
		die();
	} else {
		//Variabila in care am adaugat intructiunea SQL
		$sql = "INSERT INTO users (nume, prenume, username, password) VALUES ('$nume','$prenume','$username','$password_hashed')";
		//Trimit comanda catre baza de date
		$result = mysqli_query($conectare, $sql);

		header("Location: ../Inregistrare.php?info=Felicitari");
	}
} else {
	header("Location: ../Inregistrare.php?info=Eroare");
}

?>