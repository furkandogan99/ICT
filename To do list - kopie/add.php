<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doto";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


$sql = "SELECT * FROM dingen";
	
	// execute the query (Voer de query uit.) 
	$result = $connection->query($sql);
	
	// fetch all selected books to store in variable: booksList (Sla alle resultaten op.)
	$booksList = $result->fetch_all(MYSQLI_ASSOC);

	var_dump($variable);
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>
