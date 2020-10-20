<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>PHP - Atividade 6</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container">
<h1>Personagens fictícios</h1>
<p>Preencha as caixas de texto abaixo com com informações de personagens fictícios.</p>
<form class="container" action="" method="post">
	<table id="data-collect">
		<tr>
			<th>Nome:</th>
			<th>Sobrenome:</th>
			<th>Alter Ego:</th>
			<th>Poderes:</th>
		</tr>
		<?php
			$linhas = 4;
			$colunas = 4;
			for ($l=0; $l < $linhas ; $l++) { 
				echo "<tr>";
				for ($c=0; $c < $colunas; $c++) { 
					echo "<td><input type='text' name='l" . $l . "c" . $c . "' required></td>";
				}
				echo "</tr>";
			}
		?>
	</table>
	<br>
	<input type="submit" value="Enviar" name="btnsubmit" class="btn btn-dark">
</form>
<hr>
<?php
	if (isset($_POST["btnsubmit"])) {
		$personagens = array();
		for ($l=0; $l < 4; $l++) { 
			for ($c=0; $c < 4; $c++) { 
				$index = "l" . $l . "c" . $c;
				$personagens[$l][$c] = $_POST[$index];
			}
		}
		$linhas = count($personagens);
		$elementos = count($personagens, COUNT_RECURSIVE);
		$colunas = ($elementos - $linhas) / $linhas;

		echo "<table border='1'";
		for ($l=0; $l < $linhas; $l++) { 
			echo "<tr>";
			for ($c=0; $c < $colunas; $c++) { 
				echo "<td style='padding: 5px;'>";
				echo $personagens[$l][$c];
				echo "</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
?>
<footer>Lucas Mesquita de Souza</footer>
</body>
</html>