<!DOCTYPE html>
<html>
<head>
	<title>Questão 1 - COVID-19</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="estrutura">
	<h1>COVID-19</h1>
	<?php
		$username = $_POST["username"];
		echo "<h2>Boa sorte $username</h2>";
	?>
	<div class="question">
		<form action="q2.php" method="post">
			<label class="enunciado">1 - O que é o coronavírus?</label><br><br><br>
			<img src="img/q1.jpg"><br><br><br>
			<input type="radio" name="q1" id="q1a" value="q1a" checked>
			<label for="q1a">A) Um vírus</label><br>
			<input type="radio" name="q1" id="q1b" value="q1b">
			<label for="q1b">B) Uma família de vírus</label><br>
			<input type="radio" name="q1" id="q1c" value="q1c">
			<label for="q1c">C) Uma marca de cerveja</label><br>
			<input type="radio" name="q1" id="q1d" value="q1d">
			<label for="q1d">D) Uma doença</label><br>
			<input type="radio" name="q1" id="q1e" value="q1e">
			<label for="q1e">E) Um teorema matemático</label><br><br><br>
			<input type="submit" value="Próxima Questão">
			<?php
				echo "<input type='hidden' value='$username' name='username'></input>";
			?>
		</form>
		<footer>Lucas Mesquita de Souza</footer>
	</div>
</div>
</body>
</html>