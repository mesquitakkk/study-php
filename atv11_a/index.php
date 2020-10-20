<?php 
	session_start();
	$_SESSION["servername"] = "localhost"; 
	$_SESSION["username"] = "root"; 
	$_SESSION["password"] = ""; 
	$_SESSION["dbname"] = "bd_lucasmesquita"; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Atividade 11A - PHP</title>
	<meta charset="utf-8">
	<!-- bootstrap and css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container">
<br>
<h1>Criando e apagando tabelas</h1>
<br>
<a href="create_table.php">Criar</a><br>
<a href="drop_table.php">Apagar</a>
<footer>Lucas Mesquita de Souza</footer>
</body>
</html>