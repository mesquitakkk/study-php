<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Questão 5 - COVID-19</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="estrutura">
	<h1>COVID-19</h1>
	<?php
		$username = $_SESSION["username"];
		$_SESSION["q4"] = $_POST["q4"];
		echo "<h2>Boa sorte $username</h2>";
	?>
	<div class="question">
		<form action="gabarito.php" method="post">
			<label class="enunciado"> 5 - Assinale uma das formas de precaução contra o COVID-19:</label><br><br><br>
			<img src="img/q5.jpg"><br><br><br>
			<input type="radio" name="q5" id="q5a" value="q5a" checked></input>
			<label for="q5a">A) manter as mãos limpas</label><br>
			<input type="radio" name="q5" id="q5b" value="q5b"></input>
			<label for="q5b">B) beber água com açucar</label><br>
			<input type="radio" name="q5" id="q5c" value="q5c"></input>
			<label for="q5c">C) ficar em ambientes aquecidos</label><br>
			<input type="radio" name="q5" id="q5d" value="q5d"></input>
			<label for="q5d">D) manter contato físico com diversas pessoas</label><br>
			<input type="radio" name="q5" id="q5e" value="q5e"></input>
			<label for="q5e">E) escovar bem os dentes</label><br><br><br>
			<input type="submit" value="Próxima Questão"></input></input>
		</form>
		<footer>Lucas Mesquita de Souza</footer>
	</div>
</div>
</body>
</html>