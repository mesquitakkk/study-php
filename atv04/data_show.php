<!DOCTYPE html>
<html>
<head>
	<title>PHP - Atividade 4</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container">
<br><br><br>
<?php
	$qtdamigos = $_POST["qtdamigos"];
	for ($i=1; $i <= $qtdamigos; $i++) { 
		$friend = "nome" . $i;
		$friendname = $_POST[$friend];
		echo "<p>
		<label>Nome do $i º amigo: $friendname</label>
		</p>";
	}
?>
<footer>Lucas Mesquita de Souza</footer>
</body>
</html>