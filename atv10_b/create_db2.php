<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>CREATE DB | PHP</title>
	<!-- bootstrap and css -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="container">
<br>
<?php 
	// new connection
	$conn = new mysqli($_SESSION["servername"], $_SESSION["username"], $_SESSION["password"]);

	// testing connection
	if ($conn->connect_error) {
		echo "<a href='create_db.php'><button class='btn btn-dark btn-sm'>Voltar</button></a>";
		die("Falha ao conectar: " . $conn->connect_error);
	} else {
		echo "<p>Conectado com sucesso.</p>";
	}

	// query
	$sql = "CREATE DATABASE bd_" . $_POST["dbname"] . ";";
	if ($conn->query($sql)) {
		echo "<p>Banco de dados criado com sucesso.</p>";	
	} else{
		echo "<p>Erro ao criar banco de dados.</p>";
	}
?>
<h3>Comando: <?php echo $sql ?></h3>
<br><a href="create_db.php"><button class="btn btn-dark btn-sm">Voltar</button></a>
<footer>Lucas Mesquita de Souza</footer>
</body>
</html>