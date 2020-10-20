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
	<!-- bootstrap and css-->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="container">
<br>
<h1>Atividade 10A</h1>
<h2>Criação de DB</h2><br>
<a href="create_db.php"><button class="btn btn-warning">Criar DB</button></a><br><br>
<a href="drop_db.php"><button class="btn btn-danger">Apagar DB</button></a>
<footer>Lucas Mesquita de Souza</footer>
</body>
</html>