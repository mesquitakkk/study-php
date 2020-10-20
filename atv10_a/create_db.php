<?php session_start();
	$conn = new mysqli($_SESSION["servername"], $_SESSION["username"], $_SESSION["password"]);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>CREATE | Atividade 10A</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="container">
<br>
<h1>Criando Banco</h1>
<?php 
	// checking connection
	if ($conn->connect_error) {
		echo "<a href='index.php'><button class='btn btn-secondary'>Voltar</button></a>";
		die("Falha ao conectar: " . $conn->connect_error);
	} else {
		echo "<p>Conectado com sucesso.</p>";
	}

	// sql command
	$sql = "CREATE DATABASE bd_LucasMesquita;";
	if ($conn->query($sql)) {
		echo "<p>Banco de dados criado com sucesso.</p>";
	} else {
		echo "<p>Erro ao criar banco de dados.</p>";
	}
	$conn->close();
?>
<h4>Comando: <?php echo $sql; ?></h4>
<a href="index.php"><button class="btn btn-secondary">Voltar</button></a>
<footer>Lucas Mesquita de Souza</footer>
</body>
</html>