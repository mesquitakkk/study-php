<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>CREATE TABLE - PHP</title>
	<meta charset="utf-8">
	<!-- bootstrap and css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container">
<br><h1>Criação de tabelas</h1><br>

<?php 
	// create connection 
	$conn = new mysqli($_SESSION["servername"], $_SESSION["username"], $_SESSION["password"], $_SESSION["dbname"]);

	// testing connection
	if ($conn->connect_error) {
		die("<p>Falha ao conectar: " . $conn->connect_error . "</p>");
	}

	// query
	$sql =
	"CREATE TABLE tb_pessoas(
		id INT NOT NULL,
		nome VARCHAR(50) NOT NULL,
		email VARCHAR(30),
		PRIMARY KEY(id)
	);";

	if ($conn->query($sql) === TRUE) {
		echo "<p>Tabela criada com sucesso.</p>";
	} else {
		echo "<p>Erro ao criar tabela: " . $conn->error . "</p>";
	}

	$conn->close();
?>

<h3>Comando:</h3>
<p><pre><?php echo $sql; ?></pre></p>

<footer>Lucas Mesquita de Souza</footer>
</body>
</html>