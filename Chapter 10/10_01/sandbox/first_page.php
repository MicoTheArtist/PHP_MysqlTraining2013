<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>First Page</title>
</head>
<body>
	<?php $link_name = "Second Page"; ?>
    <?php $id = 2; ?>
	
    <a href="second_page.php?id=1&page=<? echo $id; ?>"><? echo $link_name ?></a>
</body>
</html>