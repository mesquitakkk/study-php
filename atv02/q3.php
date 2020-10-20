<!DOCTYPE html>
<html>
<head>
	<title>Questão 3 - COVID-19</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="estrutura">
	<h1>COVID-19</h1>
	<?php
		$username = $_POST["username"];
		$q1 = $_POST["q1"];
		$q2 = $_POST["q2"];
		echo "<h2>Boa sorte $username</h2>";
	?>
	<div class="question">
		<form action="q4.php" method="post">
			<label class="enunciado"> 3 - Assinale um dos sintomas do COVID-19:</label><br><br><br>
			<img src="img/q3.jpg"><br><br><br>
			<input type="radio" name="q3" id="q3a" value="q3a" checked></input>
			<label for="q3a">A) Gastrite</label><br>
			<input type="radio" name="q3" id="q3b" value="q3b"></input>
			<label for="q3b">B) Febre</label><br>
			<input type="radio" name="q3" id="q3c" value="q3c"></input>
			<label for="q3c">C) Dor de barriga</label><br>
			<input type="radio" name="q3" id="q3d" value="q3d"></input>
			<label for="q3d">D) Baixa auto-estima</label><br>
			<input type="radio" name="q3" id="q3e" value="q3e"></input>
			<label for="q3e">E) Dor de dente</label><br><br><br>
			<input type="submit" value="Próxima Questão"></input></input>
			<?php
				echo "<input type='hidden' value='$username' name='username' id='username'></input>";
				echo "<input type='hidden' value='$q1' name='q1' id='q1'></input>";
				echo "<input type='hidden' value='$q2' name='q2' id='q2'></input>";
			?>
		</form>
		<footer>Lucas Mesquita de Souza</footer>
	</div>
</div>
</body>
</html>