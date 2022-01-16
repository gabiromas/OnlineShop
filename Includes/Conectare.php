<?php 
//Conectare
$conectare = mysqli_connect('localhost','root','','onlineshop');

//Verificare daca exista probleme la conectare
if (!$conectare) {
	die('Conectarea nu s-a putut efectua!');
} 

?>