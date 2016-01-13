<?php

$Name = $_GET['Name'];
$Day = $_GET['Day'];
$Color = $_GET['Color'];
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="tabel.css">
<head>
<body>

<table style="width:5%">
  <tr>
    <td>name</td>
    <td><?php echo $Name;?></td>    
  </tr>
  <tr>
    <td>day</td>
    <td><?php echo $Day;?></td> 
  </tr>
  <tr>
    <td>color</td>
    <td><?php echo $Color;?></td>    
  </tr>
</table>

</body>
</html>
