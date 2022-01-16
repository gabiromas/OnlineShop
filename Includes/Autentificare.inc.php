<?php 
session_start();
require "Conectare.php";

if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {

	$username = strtolower($_POST['username']);
	$password = $_POST['password'];

	$sql = "SELECT * FROM users WHERE username='$username'";
	$result = mysqli_query($conectare, $sql);
//array ce contine toate elementele username-ului
	$row = $result->fetch_assoc();
	$hash = $row['password'];
//verifica daca parolele sunt identice
	$check = password_verify($password, $hash);

	if($check == 0) {
		header("Location: ../Autentificare.php?info=gresit");
		die();
	} else {
		$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$hash'";
		$result = mysqli_query($conectare, $sql);

		if (!$row = $result->fetch_assoc()) {
			echo 'Parola sau username-ul e gresit!';
		} else {
			$_SESSION['id'] = $row['id'];
			$_SESSION['nume'] = $row['nume'];
			$_SESSION['prenume'] = $row['prenume'];
			$_SESSION['username'] = $row['username'];
		}
		header("Location: ../Autentificare.php");
	}
}

 ?>