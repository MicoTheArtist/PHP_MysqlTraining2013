<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	<?
		$var1 = 3;
		$var2 = 4;
	?>
    Basic Math: <? echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?><br>
    <br>
    Absolute value:	<? echo abs(0 - 300); ?><br>
    Exponential: 		<? echo pow(2,8); ?><br>
    Square root: 		<? echo sqrt(100); ?><br>
    Modulo: 			<? echo fmod(20,7); ?><br>
    Random:				<? echo rand(); ?><br>
    Random (min, max):<? echo rand(1,10); ?><br>
    <br>
    += : <? $var2 += 4; echo $var2; ?><br>
    -= : <? $var2 -= 4; echo $var2; ?><br>
    *= : <? $var2 *= 3; echo $var2; ?><br>
    /= : <? $var2 /= 4; echo $var2; ?><br>
    <br>
    Increment: <? $var2++; echo $var2; ?><br>
    Decrement: <? $var2--; echo $var2; ?><br>
    <br>
    
</body>
</html>