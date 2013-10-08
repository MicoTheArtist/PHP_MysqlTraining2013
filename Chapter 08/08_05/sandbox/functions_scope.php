<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<body>
	<?php
		$bar = "outside";	// global scope
		
		function foo() {
			global $bar;
			if (isset($bar)) {
				echo "foo: ".$bar."<br>";
			}
			return $bar = "inside";
		}
		
		echo "1: ".$bar."<br>";
		foo();
		echo "2: ".$bar."<br>";
	?>
</body>
</html>