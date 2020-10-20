<!DOCTYPE html>
<html>
<head>
	<title>p02.php</title>
</head>
<body>
<?php
	$nome = $_POST["name"];
	$anonasc = $_POST["anonasc"];
	$idade = 2020 - $anonasc;
	echo "<h2>Bem vindo " . $nome . ".</h2>";
	echo "<h3>Você tem ". $idade . " anos.</h3>";

	if ($idade >= 18 and $idade < 70) {
		echo "<h3>Você é obrigado à votar.</h3>";
	}
	elseif ($idade < 16) {
		echo "<h3>Você não pode votar.</h3>";
	}
	else {
		echo "<h3>Você não é obrigado à votar, mas se quiser pode.</h3>";
	}
?>
</body>
</html>