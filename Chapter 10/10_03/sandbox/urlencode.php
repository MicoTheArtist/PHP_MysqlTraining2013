<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>urlencode</title>
	</head>
	<body>
		<?php
			$page = "William Shakespeare";
			$quote = "To be or not to be";
			$link1 = "/bio/" . rawurlencode($page) . "?quote=".urlencode($quote);
			$link2 = "/bio/" . urlencode($page) . "?quote=".rawurlencode($quote);
        
        	echo $link1."<br>";
        	echo $link2."<br>";
		?>
        <!-- note we only use URL encodeing for the get requests and not post or session requests. Reason is that we are placing the values in the URL -->
	</body>
</html>