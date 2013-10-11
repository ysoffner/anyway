<!DOCTYPE html>
<html>
<head>
	<title> </title>
</head>
<body>
	<?php
		//URL: http://localhost:8000/index.php?name=Kevin&amp;names=Yank
		$name = $_GET['name'];
		$names = $_GET['names'];
		echo 'ola ' . $name . ' o ' . $names . ' td blz?';
		var_dump($names);
	?>
</body>
</html>

