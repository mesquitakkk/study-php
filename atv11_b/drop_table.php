<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>DROP TABLE - PHP</title>
	<meta charset="utf-8">
	<!-- bootstrap and css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container">
<br><h1>Apagando tabelas</h1><br>

<?php 
	// create connection 
	$conn = new mysqli($_SESSION["servername"], $_SESSION["username"], $_SESSION["password"], $_SESSION["dbname"]);

	// testing connection
	if ($conn->connect_error) {
		die("<p>Falha ao conectar: " . $conn->connect_error . "</p>");
	}

	// query
	$sql = "DROP TABLE itensvendidos;";

	if ($conn->query($sql) === TRUE) {
		echo "<p>Tabela apagada com sucesso.</p>";
		echo "<pre>$sql</pre>";
	} else {
		echo "<p>Erro ao apagar tabela: " . $conn->error . "</p>";
	}

	$sql = "DROP TABLE produtos;";

	if ($conn->query($sql) === TRUE) {
		echo "<p>Tabela apagada com sucesso.</p>";
		echo "<pre>$sql</pre>";
	} else {
		echo "<p>Erro ao apagar tabela: " . $conn->error . "</p>";
	}

	$sql = "DROP TABLE vendas;";

	if ($conn->query($sql) === TRUE) {
		echo "<p>Tabela apagada com sucesso.</p>";
		echo "<pre>$sql</pre>";
	} else {
		echo "<p>Erro ao apagar tabela: " . $conn->error . "</p>";
	}

	$sql = "DROP TABLE clientes;";

	if ($conn->query($sql) === TRUE) {
		echo "<p>Tabela apagada com sucesso.</p>";
		echo "<pre>$sql</pre>";
	} else {
		echo "<p>Erro ao apagar tabela: " . $conn->error . "</p>";
	}

	$conn->close();
?>

<footer>Lucas Mesquita de Souza</footer>
</body>
</html>