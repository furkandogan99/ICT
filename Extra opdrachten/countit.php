<?php
	$max = 0;

	foreach ($_GET as $kaartje) {
		if ($kaartje > $max){
			$max = $kaartje;

		}
	}
	echo $max;
 
?>
