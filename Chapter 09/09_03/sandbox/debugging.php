<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Debugging</title>
</head>
<body>
	<?php
		$number = 99;
		$string = "Bug?";
		$array = array(
			1 => "Homepage",
			2 => "About Us",
			3 => "Services"
		);
		
		var_dump($number);
		
		echo "<br><bre>";
		
		var_dump($string);
		
		echo "<br><bre>";
		
		echo "<pre>";
		var_dump($array);
		echo "</pre>";
		
		echo "<b>PRINT R</b>";
		echo "<pre>";
		print_r($array);
		echo "</pre>";
	?>
    
    <?php
		echo "<b>GET DEFINED VARS</b>";
		echo "<pre>";
		print_r(get_defined_vars());
		echo "</pre>";
	?>
    
    <?php
		function say_hello_to($word) {
			echo "Hello {$word}!<br>";
			
			echo "<pre>";
			var_dump(debug_backtrace());
			echo "</pre>";
		}
		
		say_hello_to('Everyone');
	?>
</body>
</html>