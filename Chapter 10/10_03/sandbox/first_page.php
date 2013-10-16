<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>First Page</title>
	</head>
	<body>
		
		<?php $link_name = "Second Page"; ?>
		<?php $id = 5; ?>
        <?php $company = "Johnson & Johnson"; ?>
		
		<a href="second_page.php?id=<?php echo rawurlencode($id); ?>&company=<?php echo urlencode($company); ?>"><?php echo $link_name; ?></a>
		
        <!-- note we only use URL encodeing for the get requests and not post or session requests. Reason is that we are placing the values in the URL -->
	</body>
</html>
