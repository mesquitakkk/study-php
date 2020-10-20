<!DOCTYPE html>
<html>
<head>
	<title>Content page</title>
	<meta charset="utf-8">
</head>
<body>
<?php
	$year_old = $_POST["year_old"];
	if ($year_old < 18 and $year_old >= 16) {
		# Menor de idade, não obrigado a votar
		echo "<h1>Menor de idade, não obrigado a votar</h1>";
	}
	elseif ($year_old < 16) {
		# não pode votar
		echo "<h1>Menor de idade, não pode votar</h1>";
	}
	elseif ($year_old >= 70) {
		# Idoso, não é obrigado a votar
		echo "<h1>Idoso, não é obrigado votar</h1>";
	}
	else {
		# Obrigado a votar
		echo "<h1>Voto obrigatório</h1>";
	}
?>
</body>
</html>