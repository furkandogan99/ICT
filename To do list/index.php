<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>To do</title>
		<link rel="stylesheet" type="text/css" href="todo.css">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	</head>
	<body>
		<div class="list">
			<h1 class="header">To do.</h1>

			<ul class="items">
				<li>
					<span class="item">Shoppen</span>
					<a href="#" class="gedaan-button">Gedaan</a>
				</li>
			</ul>

			<form class="item-add" action="add.php" method="post">
				<input type="text" name="name" placeholder="Typ een nieuw item hier." class="input" autocomplete="off" required>
				<input type="submit" value="Add" class="Submit">
			</form> 
			
		</div>

	</body>
</html>