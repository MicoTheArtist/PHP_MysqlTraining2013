<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<body>
<?
	while($count <=10) {
    	echo $count;
		$count += 1;
    }
?>
<br><br>
<?
	$count = 0;
	while($count <= 10) {
		if ($count == 5) {
			echo "FIVE, ";
		} else {
			echo $count . ", ";
		}
		$count++;
	}
	
	echo "<br><br>";
	echo "Count: {$count}";
?>
<br><br>
<?	
	for($i=0; $i<=10; $i++) {
		echo $i.", ";
	}
?>
</body>
</html>