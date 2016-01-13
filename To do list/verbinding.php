<?php
 //maak een database verbinding
 $con = new mysqli ("localhost","root","","todo");

 // voeg een item toe

 	// Controleren of er een formulier met een POST methode verzonden wordt
 		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
 		// als een formulier is verzonden, controleer dan of de naam is ingevuld
 			if($_POST['name'] != ""){
 			// als dat het geval is, maak een query die het boek toevoegt 
 				$sql = "INSERT INTO items ('name') VALUES ('".$_POST['name']. "')";
 			// voer de query uit
 				$con-> query($sql);
 // lees items uit

  // maak een query die alle items ophaalt
  $sql = "SELECT * FROM todo";

  // Voer de query uit
  $result = $con->query($sql);

  // sla alle resultaten op in een array
  $rows = $result->fetch_all(MYSQLI_ASSOC);

  var_dump($rows);

  // Bewerk een item 

  // verwijder een item
  	if (isset($_GET['delete'])){
  	//kijk of de variabele delete bestaat in de get
  //als dat het geval is,
  //kijk of de variabele id bestaat
  		if (isset($_GET['id'])){
  //als die oo bestaat, maak een
  //Query om het item te verwijderen
  		$sql = "DELETE FROM items WHERE id = '". $_GET[]

  // voer de query uit


  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
  	<meta charset="UTF-8">
  	<title>Todo</title>
  </head>
  <body>
  		<?php
  		// zet uit de variable $rows alle boeken op het scherm
  		foreach ($rows as $todo) {
  			echo $todo['name']?>

  			- <a href="/todo/index.php?id=<?=$todo
  		}
  		?>

  		<form method="POST">
  			<input type="text" name="name" placeholder="Vul boektitel in">
  			<input type="submit" name= "postback" value='Toevoegen'>
  		</form>
  </body>
  </html>