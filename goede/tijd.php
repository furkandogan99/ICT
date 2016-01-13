<?php

	$hour = date("H"); 
	$time = date("H:i");
	if ($hour <= 6) {
		//nacht
		$message = "Goedenacht";
	} elseif ($hour <= 12) {
		$message = "Goedemorgen";
		//ochtend
	} elseif ($hour <= 18) {
		$message = "Goedemiddag";
		//middag
	} else {
		$message = "Goedeavond";
		//avond
	}

?>



<html>
	<head>
		<title><?php echo $message; ?></title>
		<link rel = "stylesheet" type = "text/css" href = "goede.css">
	</head>

	<body class="<?php echo $message; ?>">

		<div>
			<p><?php echo $message; ?>
			<?php echo "Het is nu: ";
			echo $time; ?></p>
		</div>
	</body>



</html>