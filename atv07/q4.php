<?php
	session_start();
?>
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
		$username = $_SESSION["username"];
		$_SESSION["q3"] = $_POST["q3"];
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
		</form>
		<footer>Lucas Mesquita de Souza</footer>
	</div>
</div>
</body>
</html>