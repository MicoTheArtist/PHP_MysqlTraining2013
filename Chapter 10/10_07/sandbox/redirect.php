<?
	function redirect($new_location) {
		header("Location: ".$new_location);
		exit;
	}
	
	$logged_in = $_GET['logged_in'];
	
	if ($logged_in == "1") {
		redirect("basic.html");
	} else {
		redirect("http://www.lynda.com");
	}
	
	//$new_location = "basic.html";
	//redirect($new_location);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Redirect</title>
</head>

<body>
</body>
</html>