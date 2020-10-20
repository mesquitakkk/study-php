<!DOCTYPE html>
<html>
<head>
	<title>PHP - Atividade 4</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container">
<form action="name_collect.php" method="POST">
	<p>
		<br><br><br>
		<label>Digite quantos amigos você tem:</label>
		<input type="number" name="qtdamigos" min="1" max="30" value="1">
	</p>
	<p>
		<input type="submit" class="btn btn-outline-dark" value="Enviar">
	</p>
</form>
<footer>Lucas Mesquita de Souza</footer>
</body>
</html>