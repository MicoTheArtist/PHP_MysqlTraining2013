<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<body> 
<?
	$first = "The quick brown fox {testing} ";
	$second = "jumped over the lazy dog.";
	
	$third = $first;
	$third .= $second;
	echo $third;
?>
<br>
Lowercase: <? echo strtolower($third)."<br>"; ?>
Uppercase: <? echo strtoupper($third)."<br>"; ?>
Uppercase first: <? echo ucfirst($third)."<br>"; ?>
Uppercase words: <? echo ucwords($third)."<br>"; ?>

<br>
Length: <? echo strlen($third); ?><br>
Trim: <? echo "A".trim(" B C D ")."E"; ?><br>
Find: <? echo strstr($third, "brown"); ?><br>
Replace by string: <? echo str_replace("{testing}", "super-fast", $third); ?><br>

<br>
Repeat: <? echo str_repeat($third, 2); ?><br>
Make substring: <? echo substr($third, 5, 10); ?><br>
Find position: <? echo strpos($third, "brown"); ?><br>
Find character: <? echo strchr($third, "z"); ?><br>
</body>
</html>