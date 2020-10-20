<?php
    session_start();
    $_SESSION["userscore"] = 0;
    $_SESSION["machinescore"] = 0;
    $_SESSION["username"] = "";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Atividade 08</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
</head>
<body class="container">
	<br>
    <h1>JOKENPO</h1><br>
    <h3>É só escolher sua jogada e passar raiva com os resultados. Insira seu nome eclique em COMEÇAR.</h3> <br><br>
    <form action="game.php" method="POST">
        <p>
            <label>Nome: </label>
            <input type="text" name="usernamepost" required>
        </p>
        <input type="submit" name="submit" value="Começar" class="btn btn-dark">
    </form>
    <footer>Lucas Mesquita de Souza</footer>
</body>
</html>