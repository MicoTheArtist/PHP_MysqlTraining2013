<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	<?
		$var1 = null;
		$var2 = "";
		$var3;
	?>
    var1 null? <? echo is_null($var1); ?><br>
    var2 null? <? echo is_null($var2); ?><br>
    var3 null? <? echo is_null($var3); ?><br>
    
    <br>
    
    var1 is set? <? echo isset($var1); ?><br>
    var2 is set? <? echo isset($var2); ?><br>
    var3 is set? <? echo isset($var3); ?><br>
    
    <br>
    
    <? $var3 = 0; ?>
    var1 empty? <? echo empty($var1); ?><br>
    var2 empty? <? echo empty($var2); ?><br>
    var3 empty? <? echo empty($var3); ?><br>
</body>
</html>