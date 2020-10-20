<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>DROP DB | PHP</title>
	<!-- bootstrap and css -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="container">
	<br>
<h2>Apagando banco</h2><br>
<form action="drop_db2.php" method="POST">
	<label>Nome do banco (não utilize espaços):</label><br>
	bd_
	<input type="text" name="dbname" required><br><br>
	<input class="btn btn-danger" type="submit" name="btn_Enviar" value="Apagar">
</form>
<br><a href="index.php"><button class="btn btn-dark btn-sm">Voltar</button></a>
<footer>Lucas Mesquita de Souza</footer>
</body>
</html>