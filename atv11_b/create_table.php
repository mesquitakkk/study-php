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
	"CREATE TABLE clientes(
	idcliente int not null auto_increment,
	nomecliente varchar(30),
	cpfcliente varchar(13),
	primary key(idcliente));";

	if ($conn->query($sql) === TRUE) {
		echo "<p>Tabela criada com sucesso.</p>";
		echo "<pre>$sql</pre>";
	} else {
		echo "<p>Erro ao criar tabela: " . $conn->error . "</p>";
	}

	$sql = "CREATE TABLE vendas(idvenda int not null auto_increment,
	datavenda date,
	idcliente int not null,
	primary key(idvenda),
	foreign key(idcliente) references clientes(idcliente));";

	if ($conn->query($sql) === TRUE) {
		echo "<p>Tabela criada com sucesso.</p>";
		echo "<pre>$sql</pre>";
	} else {
		echo "<p>Erro ao criar tabela: " . $conn->error . "</p>";
	}

	$sql = "CREATE TABLE produtos(idproduto int not null auto_increment,
	nomeproduto varchar(30) not null,
	precounitario decimal(6, 2) not null,
	primary key(idproduto));";

	if ($conn->query($sql) === TRUE) {
		echo "<p>Tabela criada com sucesso.</p>";
		echo "<pre>$sql</pre>";
	} else {
		echo "<p>Erro ao criar tabela: " . $conn->error . "</p>";
	}

	$sql = "CREATE TABLE itensVendidos(idvenda int not null,
	idproduto int not null,
	qtdvendida int not null,
	foreign key(idvenda) references vendas(idvenda),
	foreign key(idproduto) references produtos(idproduto)
	);";

	if ($conn->query($sql) === TRUE) {
		echo "<p>Tabela criada com sucesso.</p>";
		echo "<pre>$sql</pre>";
	} else {
		echo "<p>Erro ao criar tabela: " . $conn->error . "</p>";
	}

	$conn->close();
?>

<footer>Lucas Mesquita de Souza</footer>
</body>
</html>