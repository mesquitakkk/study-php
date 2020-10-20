<?php 
	session_start();
	$_SESSION["servername"] = "localhost";
	$_SESSION["username"] = "root";
	$_SESSION["password"] = "";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Aula 10 - PHP</title>
	<meta charset="utf-8">
	<!-- bootstrap and css -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="container">
<br>
<h1>Atividade 10B</h1><br>
<a href="create_db.php">Criar</a><br>
<a href="drop_db.php">Apagar</a>
<footer>Lucas Mesquita de Souza</footer>
</body>
</html>