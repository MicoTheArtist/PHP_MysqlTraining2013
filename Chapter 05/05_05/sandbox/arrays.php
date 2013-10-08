<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<body>
<?
	$numbers = array(4,8,15,16,23,42);
	echo $numbers[1];
?>

<? $mixed = array(
	6, 
	"fox", 
	"dog", 
	array("x","y","z")
	);
?>
<? echo $mixed[2]; ?><br>

<? echo "<pre>"; ?>
<? echo print_r($mixed); ?>
<? echo "</pre>"; ?>

<? echo $mixed[3][1]; ?><br>
<? echo $mixed[2] = "cat"; ?><br>
<? echo $mixed[4] = "mouse"; ?><br>
<? echo $mixed[5] = "horse"; ?><br>

<? echo "<pre>"; ?>
<? echo print_r($mixed); ?>
<? echo "</pre>"; ?>

<? $array = [1,2,3]; ?>

</body>
</html>