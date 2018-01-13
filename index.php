<?php 	

$server = "localhost";
$user = "root";
$pass = "";
$database = "";

//Conecta o MySQL
@$mysqli = new mysqli($server, $user, $pass, $database);

//Erro

if (mysqli_connect_errno()) {
	echo "Failded to connect to MySQL: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
	exit;
}