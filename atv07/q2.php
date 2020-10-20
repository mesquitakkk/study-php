<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Questão 2 - COVID-19</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="estrutura">
	<h1>COVID-19</h1>
	<?php
		$_SESSION["q1"] = $_POST["q1"];
		$username = $_SESSION['username'];
		echo "<h2>Boa sorte $username </h2>";
	?>
	<div class="question">
		<form action="q3.php" method="post">
			<label class="enunciado"> 2 - o que é covid-19?</label><br><br><br>
			<img src="img/q2.jpg"><br><br><br>
			<input type="radio" name="q2" id="q2a" value="q2a" checked></input>
			<label for="q2a">A) Um modelo de smartphone</label><br>
			<input type="radio" name="q2" id="q2b" value="q2b"></input>
			<label for="q2b">B) Uma espécie de fungo</label><br>
			<input type="radio" name="q2" id="q2c" value="q2c"></input>
			<label for="q2c">C) Um modelo de carro</label><br>
			<input type="radio" name="q2" id="q2d" value="q2d"></input>
			<label for="q2d">D) Uma doença infecciosa</label><br>
			<input type="radio" name="q2" id="q2e" value="q2e"></input>
			<label for="q2e">E) Um pigmento</label><br><br><br>
			<input type="submit" value="Próxima Questão"></input>
		</form>
		<footer>Lucas Mesquita de Souza</footer>
	</div>
</div>
</body>
</html>