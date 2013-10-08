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
		
		if ($a > $b) {
			echo "a is larger than b";
		}
		
		if ($a < $b) {
			echo "a is not larger than b";
		}
	?>
    
    <br>
    
    <?
		$new_user = true;
		if ($new_user) {
			echo "<h1>Welcome!</h1>";
			echo "<p>We are glad you decided to join us.</p>";
		}
	?>
    
    <br>
    
    <?
		$numerator = 20;
		$denominator = 1;
		
		if ($denominator > 0) {
			$result = $numerator / $denominator;
			echo "Result: {$result}";
		}
	?>
</body>
</html>