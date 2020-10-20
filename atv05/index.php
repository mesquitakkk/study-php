<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>PHP - Atividade 05</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container">
<h1>Personagens fictícios</h1>
<form action="" method="post">
	<p><label>Preencha as caixas de texto abaixo com nomes de personagens fictícios (filmes, animes, quadrinhos, etc).</label><br></p>
	<div class="container">
	<?php
		/*criação de inputs (nomes)*/
		for ($i=0; $i < 4; $i++) { 
			echo "<label>" . ($i + 1) . " º nome: &nbsp</label><input type='text' name='nome$i' required><br><br>";
		}
	?>
	</div>

	<!-- color input -->
	<label>Escolha uma cor: </label><br><br>
	<p class="container">
		<input type="radio" name="color" value="red">
		<label for="red">Vermelho</label>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="color" value="green">
		<label for="green">Verde</label>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="color" value="blue">
		<label for="blue">Azul</label>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="color" value="yellow">
		<label for="yellow">Amarelo</label>&nbsp;&nbsp;&nbsp;&nbsp;
	</p>
	<input type="submit" value="Enviar" name="btnsubmit" class="btn btn-dark">
</form>
<hr>
<?php 
	$nomes = array();
	if (isset($_POST["btnsubmit"])) {
		$color = $_POST["color"];
		for ($i=0; $i < 4; $i++) { 
			$nomes[$i] = $_POST["nome$i"];
		}
		$nomes_length = count($nomes);
		switch ($color) {
			case 'red':
				echo "<div style='background-color: #FF2222' class='container'>";
				for ($i=0; $i < $nomes_length; $i++) { 
					echo "<h5>" . $nomes[$i] . "</h5>";
				}
				echo "</div>";
				break;
			case 'green':
				echo "<div style='background-color: #9ACD32' class='container'>";
				for ($i=0; $i < $nomes_length; $i++) { 
					echo "<h5>" . $nomes[$i] . "</h5>";
				}
				echo "</div>";
				break;
			case 'blue':
				echo "<div style='background-color: #87CEFA' class='container'>";
				for ($i=0; $i < $nomes_length; $i++) { 
					echo "<h5>" . $nomes[$i] . "</h5>";
				}
				echo "</div>";
				break;
			case 'yellow':
				echo "<div style='background-color: #F0E68C' class='container'>";
				for ($i=0; $i < $nomes_length; $i++) { 
					echo "<h5>" . $nomes[$i] . "</h5>";
				}
				echo "</div>";
				break;
		}
	}
?>
<footer>Lucas Mesquita de Souza</footer>
</body>
</html>