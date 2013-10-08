<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<body>
	<? echo $float = 3.14; ?><br>
    <? echo $float + 7; ?><br>
    <? echo 4/3; ?><br>
    
    <br>
    
    Round: 		<? echo round($float, 1); ?><br>
    Ceiling: 	<? echo ceil($float); ?><br>
    Floor: 		<? echo floor($float); ?><br>
    
    <br>
    
    <? $integer = 3; ?>
    <? echo "Is {$integer} integer? " . is_int($integer); ?><br>
    <? echo "Is {$float} integer? ". is_int($float); ?><br>
    
    <br>
    
    <? echo "Is {$integer} float?". is_float($integer); ?><br>
    <? echo "Is {$float} float?". is_float($float); ?><br>
    
    <br>
    
    <? echo "Is {$integer} numeric?". is_numeric($integer); ?><br>
    <? echo "Is {$float} numeric?". is_numeric($float); ?><br>
</body>
</html>