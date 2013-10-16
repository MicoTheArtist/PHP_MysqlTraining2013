<?	
	header ("HTTP 1.1/ 404 NOT FOUND");
	//header("X-Powered-By: none of your business");
	/*
	 header("HTTP 1.1/ 404 Not Found");
	 header("X-Powered-By: none of your business");
	 */
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	<pre>
    	<? print_r(headers_list()); ?>
    </pre>
</body>
</html>