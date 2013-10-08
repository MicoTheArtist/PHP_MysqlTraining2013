<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Associative Arrays</title>
</head>
<body>
	<? 
		$assoc = array(
						"first_name" => "Kevin", 
						"last_name" => "Skoglund"
						);
	?>
    
    <? echo $assoc["first_name"]; ?><br>
    <? echo $assoc["first_name"]. " " .$assoc['last_name']; ?><br>
    
    <? $assoc["first_name"] = "Larry"; ?>
    <? echo $assoc["first_name"]. " " . $assoc["last_name"]; ?><br>
    
	<? echo "Test: ".$assoc[0]; ?><br>
    
    <? $numbers = array(4,8,15,16,23,42); ?>
    <? 
		$numbers = array(
			0 => 4,
			1 => 8,
			2 => 15,
			3 => 16,
			4 => 23,
			5 => 42
		); 
	?>
    <? echo "Test: ".$numbers[0]; ?>
</body>
</html>