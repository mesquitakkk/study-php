<!DOCTYPE html>
<html>
<head>
	<title>PHP - Atividade 4</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container">
<br><br><br>
<?php
	echo "<form action='data_show.php' method='POST'";
	if (isset($_POST["qtdamigos"])) {
		echo "<h2>Meus Amigos</h2><br>";
		$qtdamigos = $_POST["qtdamigos"];
		for ($i=1; $i <= $qtdamigos ; $i++) { 
			echo "<p>
			<label>Nome do $i º amigo: </label>
			<input type='text' name='nome$i' required><br><br>
			</p>
			<input type='hidden' value='$qtdamigos' name='qtdamigos'>";
		}
	}
	echo "<input type='submit' class='btn btn-outline-dark' value='Enviar'>
	</form>";
?>
<footer>Lucas Mesquita de Souza</footer>
</body>
</html>