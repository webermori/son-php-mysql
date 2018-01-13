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
$query = $mysqli->query($sql);

while ($data = $query->fetch_assoc()) {
	echo "ID: ".$data['id']."<br>";
	echo "Name: ".$data['name']."<br>";
	echo "E-mail: ".$data['email']."<hr>";
}

