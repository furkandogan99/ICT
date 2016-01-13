<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vervolg</title>
</head>
<body>
	<form action="volgende.php">
		<?php $test = $_GET ['name'] ?>

		<?php for ($x = 1; $x <= $test; $x++){ ?>
			<input type="number" name="name<?php echo $x = $x + 0?>"><br>
		<?php } ?>
			<input type="submit"> 
	</form>
</body>
</html>