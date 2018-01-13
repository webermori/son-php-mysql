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

//Getting Data
//$query = $mysqli->query($sql);
// while ($data = $query->fetch_assoc()) {
// 	echo "ID: ".$data['id']."<br>";
// 	echo "Name: ".$data['name']."<br>";
// 	echo "E-mail: ".$data['email']."<hr>";
// }

if ($query = $mysqli->query($sql)) {
	$user = $query->fetch_all(MYSQLI_BOTH);
/*
	fetch_all
		MYSQLI_NUM
		MYSQLI_ASSOC
		MYSQLI_BOTH

*/
	foreach ($user as $value) {
		echo $value[0]." - ".$value["name"]." - ".$value["email"] ."<br>";
	}
	//echo "ID: ".$user[0]["name"];

	//print_r($user);
}
