<!DOCTYPE html>

<?php 

$huisdier = $_POST['huisdier'];

$belangrijkste = $_POST['belangrijkste'];

$woonplaats = $_POST['woonplaats'];

$vervelen = $_POST['vervelen'];

$city = $_POST['city']; 

$spijbelen = $_POST['spijbelen'];	

$geld = $_POST['geld'];

$bezigheid = $_POST['bezigheid'];


?>













<html>

<head>

<link href="form.css" rel="stylesheet" type="text/css" />

	<title>Formulier</title>

</head>

<body>

<h1>Mad Lips</h1>




<form method="post" action="mood.php">




<div class="header">

	<a href="http://localhost/form.php/form.php">Er heerst paniek....</a><a href="http://localhost/form.php/onkunde.php">Onkunde</a>  </div>

<div class="content">

    <p>

<p>Er heerst paniek in het koninkrijk <?php echo $woonplaats; ?>.

Koning <?php echo $spijbelen; ?> is ten einde raad en als koning <?php echo $spijbelen; ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer .<?php echo $belangrijkste; ?></p>




<p>"<?php echo $belangrijkste; ?>! Het is een ramp! Het is een schande!"</p>

<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>

<p>"Mijn <?php echo $huisdier; ?> is verdwenen! Zo maar, zonder waarschuwing.

En ik had net <?php echo $city; ?> voor hem gekocht!"</p>

<"Majesteit, uw <?php echo $huisdier; ?> komt vast vanzelf weer terug?"</p>

<p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd 

<?php echo $bezigheid; ?> leren?"</p>

<p>"Maar Sire, daar kunt u toch uw <?php echo $geld; ?> voor gebruiken."</p>

<p>"<?php echo $belangrijkste; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."

"<?php echo $vervelen; ?>, Sire."</p>

   

</div>

</form>










</body>

</html>