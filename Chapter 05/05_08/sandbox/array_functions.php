<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<body>
	<? $numbers = array(8,23,15,42,16,4); ?>
    
    Count: 		<? echo count($numbers); 	?><br>
    Max value: <? echo max($numbers); 	?><br>
    Min value:	<? echo min($numbers); 	?><br>
    
    <br>
    
    Sort: 			<? sort($numbers); echo "<pre>"; print_r($numbers); echo "</pre>"; ?><br>
    Reverse sort: 	<? rsort($numbers); echo "<pre>"; print_r($numbers); echo "</pre>"; ?><br>
    
    <br>
    
    Implode:		<? echo $num_string = implode(" | ", $numbers); ?><br>
    Explode: 		<? echo "<pre>"; print_r(explode(" * ", $num_string)); echo "</pre>"; ?><br>
	
    <br>
    
    15 in array?: 	<? echo in_array(15, $numbers); ?><br>
    19 in array?:	<? echo in_array(19, $numbers); ?><br>
    
    <br>
    
    
</body>
</html>