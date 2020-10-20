<!DOCTYPE html>
<html>
<head>
	<title>Questão 4 - COVID-19</title>
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
		$q3 = $_POST["q3"];
		echo "<h2>Boa sorte $username</h2>";
	?>
	<div class="question">
		<form action="q5.php" method="post">
			<label class="enunciado"> 4 - Como é chamada a pessoa que não têm sintomas, mas pode transmitir o vírus?</label><br><br><br>
			<img src="img/q4.jpg"><br><br><br>
			<input type="radio" name="q4" id="q4a" value="q4a" checked></input>
			<label for="q4a">A) acenótico</label><br>
			<input type="radio" name="q4" id="q4b" value="q4b"></input>
			<label for="q4b">B) ascendente</label><br>
			<input type="radio" name="q4" id="q4c" value="q4c"></input>
			<label for="q4c">C) assintomático</label><br>
			<input type="radio" name="q4" id="q4d" value="q4d"></input>
			<label for="q4d">D) aceróla</label><br>
			<input type="radio" name="q4" id="q4e" value="q4e"></input>
			<label for="q4e">E) sintético</label><br><br><br>
			<input type="submit" value="Próxima Questão"></input></input>
			<?php
				echo "<input type='hidden' value='$username' name='username' id='username'></input>";
				echo "<input type='hidden' value='$q1' name='q1' id='q1'></input>";
				echo "<input type='hidden' value='$q2' name='q2' id='q2'></input>";
				echo "<input type='hidden' value='$q3' name='q3' id='q3'></input>";
			?>
		</form>
		<footer>Lucas Mesquita de Souza</footer>
	</div>
</div>
</body>
</html>