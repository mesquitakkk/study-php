<?php 
	session_start();
	$_SESSION["wrong_letters"] = 0;
	$_SESSION["back_word"] = "BANANA";
	$_SESSION["image"] = "vazia.png";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Atividade 09 - PHP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
</head>
<body class="container">
<br>
<h1>Jogo da Forca!</h1><br>
<h3>Tente adivinhar qual fruta é. Você só tem 6 tentativas!</h3><br><br>
<a href="game.php"><button class="btn btn-dark">Começar</button></a>
<footer>Lucas Mesquita</footer>
</body>
</html>