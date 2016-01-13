<!DOCTYPE html>

<?php 

$kunnen = $_POST['kunnen'];

$opschieten = $_POST['opschieten'];

$getal = $_POST['getal'];

$vakantie = $_POST['vakantie'];

$eigenschap = $_POST['eigenschap']; 

$gewoonte = $_POST['gewoonte'];	

$overkomen = $_POST['overkomen'];




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

	<a href="http://localhost/form.php/form.php">Er heerst paniek....</a><a href="http://localhost/form.php/onkunde.php">Onkunde</a> </div>

<div class="content">

    <p>

Er zijn veel mensen die niet kunnen <?php echo $kunnen; ?>. Neem nou <?php echo $opschieten; ?>.

Zelfs met de hulp van een <?php echo $vakantie; ?> of zelfs <?php echo $getal; ?> kan <?php echo $opschieten; ?> niet <?php echo $kunnen; ?>.

Dat heeft niet te maken met een gebrek aan <?php echo $eigenschap; ?>, maar met een te veel aan <?php echo $gewoonte; ?> .

Te veel <?php echo $gewoonte; ?> leidt tot <?php echo $overkomen; ?> en dat is niet goed als je wilt <?php echo $kunnen; ?>.

Helaas voor <?php echo $opschieten; ?>.



</div>

</form>


</body>

</html>

    