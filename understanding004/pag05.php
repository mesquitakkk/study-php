<!DOCTYPE html>
<html>
<head>
	<title>PHP - Repetição</title>
	<meta charset="utf-8">
</head>
<body>
<?php
	$qtdamigos = $_POST["qtdamigos"];
	for ($i=1; $i <= $qtdamigos; $i++) { 
		$friend = "nome" . $i;
		$friendname = $_POST[$friend];
		echo "<p>
		<label>Nome do amigo  $i: $friendname</label>
		</p>";
	}
?>
</body>
</html>