<!DOCTYPE html>
<html>
<head>
	<title>PHP - estruturas de repetição</title>
	<meta charset="utf-8">
</head>
<body>
<?php
	for ($i=0; $i < 5; $i++) { 
		echo "(for) 5 vezes.<br>";
	}
	echo "<br>";

	$cont = 1;
	while ($cont <= 10) {
		echo "(while) 10 vezes.<br>";
		$cont += 1;
	}
?>
<br>
<button><a href="pag02.php">pag02</a></button>
</body>
</html>