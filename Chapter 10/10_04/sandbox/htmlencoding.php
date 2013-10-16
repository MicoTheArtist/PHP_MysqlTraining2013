<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>HTML encoding</title>
	</head>
	<body>
    	<?
			// htmlentities() 		-- The htmlentities() function converts characters to HTML entities.  You use this if you want to output some html tags on a page.
			// htmlspecialchars()	-- The htmlspecialchars() function converts some predefined characters to HTML entities. ( & , " , ' , < , > )
			// rawurlencode()		-- best for sending $_GET urls safely using spaces some type of html special charachters
			// urlencode()			-- url encoding of a $_GET url that uses "+" signs to replace the spaces
		?>
    
		<? $linktext = "<Click> & learn more"; ?>
        
        <a href=""> <? echo htmlspecialchars($linktext); // figure 1 ?> </a>
        
        <br>
        
        <?php
			$text = "™£•“—é";
			echo htmlentities($text);	// sample 2
		?>
        
        <br>
        
        <?php
			$url_page = "php/created/page/url.php";
			$param1 = "This is a string with < >";
			$param2 = "&#?*$[]+ are bad characters";
			$linktext = "<Click> & learn more";
			
			// Below is a set of four $url's appending to each other using various url encoding to make it safe to send in a $_GET request
			$url = "http://localhost/";
			$url .= rawurlencode($url_page);
			$url .= "?" . "param1=" . urlencode($param1);
			$url .= "&" . "param2=" . urlencode($param2);
		?>
        
        <? // sample 3 ?>
        <a href="<?php echo htmlspecialchars($url); ?>"><?php echo htmlspecialchars($linktext); ?></a>
	</body>
</html>