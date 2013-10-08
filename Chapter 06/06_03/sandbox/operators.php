<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<body>
	<?
		$a = 4;
		$b = 3;
		$c = 20;
		$d = 1;
		if (($a > $b) && ($c > $d)) {
			echo "a is larget than b AND ";
			echo "c is larger than d";
		}
	?>
    <br><br>
    <?
		if (!isset($e)) {
			$e = 200;
		}
		
		echo $e;
	?>
    
    <br><br>
    <?
		$quantity = '';
		if (empty($quantity) && !is_numeric($quantity)) {
			echo "You must enter a quantity";
		}
	?>
</body>
</html>