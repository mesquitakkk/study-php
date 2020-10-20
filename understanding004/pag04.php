<!DOCTYPE html>
<html>
<head>
	<title>PHP - Repetição</title>
	<meta charset="utf-8">
</head>
<body>
<?php
	$qtdamigos = $_POST["qtdamigos"];
	echo "<h2>Meus Amigos</h2>";
	echo "<form action='pag05.php' method='POST'";
	for ($i=1; $i <= $qtdamigos ; $i++) { 
		echo "<p>
		<label>Nome do amigo $i: </label>
		<input type='text' name='nome$i'><br><br>
		</p>
		<input type='hidden' value='$qtdamigos' name='qtdamigos'>";
	}
	echo "<input type='submit' value='enviar (pag05)'>
	</form>";
?>
<button><a href="pag03.php">pag03</a></button>
</body>
</html>