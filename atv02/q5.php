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
		$username = $_POST["username"];
		$q1 = $_POST["q1"];
		$q2 = $_POST["q2"];
		$q3 = $_POST["q3"];
		$q4 = $_POST["q4"];
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
			<?php
				echo "<input type='hidden' value='$username' name='username' id='username'></input>";
				echo "<input type='hidden' value='$q1' name='q1' id='q1'></input>";
				echo "<input type='hidden' value='$q2' name='q2' id='q2'></input>";
				echo "<input type='hidden' value='$q3' name='q3' id='q3'></input>";
				echo "<input type='hidden' value='$q4' name='q4' id='q4'></input>";
			?>
		</form>
		<footer>Lucas Mesquita de Souza</footer>
	</div>
</div>
</body>
</html>