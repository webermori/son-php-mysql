<?php 	
$server = "localhost";
$user = "root";
$pass = "";
$database = "son-php-mysql";

//Conecta o MySQL
@$mysqli = new mysqli($server, $user, $pass, $database);

//Erro
if (mysqli_connect_errno()) {
	echo "Failded to connect to MySQL: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
	exit;
}
$sql = "SELECT * FROM USERS";



if ($query = $mysqli->query($sql)) {

	$user = $query->fetch_row();

	echo "ID: ".$user[0]."<br>";
	// echo "Name: ".$user['name']."<br>";
	// echo "E-mail: ".$user['email']."<hr>";


	print_r($user);
}
