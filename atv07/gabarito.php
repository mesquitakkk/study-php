<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/resultado.css">
</head>
<body>
<div id="estrutura">
	<h1>COVID-19</h1>
	<h2>Gabarito</h2>
	<?php 
		$username = $_SESSION["username"];
		$q1 = $_SESSION["q1"];
		$q2 = $_SESSION["q2"];
		$q3 = $_SESSION["q3"];
		$q4 = $_SESSION["q4"];
		$q5 = $_SESSION["q5"];
		$pontuacao = 0;
		if ($q1 == "q1b") {
			# Verificando se a questão 1 está certa
			$pontuacao += 2;
		}
		if ($q2 == "q2d") {
			# Verificando se a questão 2 está certa
			$pontuacao += 2;
		}
		if ($q3 == "q3b") {
			# Verificando se a questão 3 está certa
			$pontuacao += 2;
		}
		if ($q4 == "q4c") {
			# Verificando se a questão 1 está certa
			$pontuacao += 2;
		}
		if ($q5 == "q5a") {
			# Verificando se a questão 1 está certa
			$pontuacao += 2;
		}
		/*q1b, q2d, q3b, q4c, q5a*/
		echo "<h3><br>Nome: $username</h3>";
		echo "<h3>Pontuação: $pontuacao</h3>";
	?>
	<footer>Lucas Mesquita de Souza</footer>
</div>
</body>
</html>