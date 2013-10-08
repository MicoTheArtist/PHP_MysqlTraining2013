<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Type Juggling and Type Casting</title>
</head>
<body>
	
    Type Juggling<br>
    <? $count = "2 cats"; ?>
    Type: <? echo gettype($count); ?><br>
    
    <? $count += 3; ?>
    Type: <? echo gettype($count); ?>
    
    <? $cats = "I have ".$count . " cats."; ?><br>
    Cats: <? echo gettype($cats); ?><br>
    
    <br>
    
    Type Casting<br>
    <? settype($count, "integer"); ?>
    count: <? echo gettype($count); ?><br>
    
    <? $count2 = (string) $count; ?>
    count: <? echo gettype($count); ?><br>
    count2: <? echo gettype($count2); ?><br>
    <br>
    
    <? $test1 = 3; ?>
    <? $test2 = 3; ?>
    <? settype($test1, "string"); ?>
    <? (string) $test2; ?>
    test1: <? echo gettype($test1); ?><br>
    test2: <? echo gettype($test2); ?><br>
    
    
</body>
</html>