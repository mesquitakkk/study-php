<!DOCTYPE html>
<html>
<head>
	<title>PHP - Aula 03</title>
	<meta charset="utf-8">
</head>
<body>
<form action="" method="post">
	<p>
		<label>Nome: </label>
		<input type="text" name="nome">
	</p>
	<p>
		<label>Escolha seu trava-língua:</label><br><br>
		<select name="trava">
			<option value="rato">rato</option>
			<option value="tigre">tigre</option>
			<option value="mafa">mafagafinho</option>
		</select>
	</p>
	<p>
		<input type="submit" value="enviar" name="btnEnviar">
	</p>
	<hr>
	<?php 
		if (isset($_POST["btnEnviar"]) && !empty($_POST["nome"])) {
			$nome = $_POST["nome"];
			$trava = $_POST["trava"];
			echo "<h2>Bem vindo $nome</h2>";
			switch ($trava) {
				case "rato":
					echo "<p>O rato roeu a roupa do dei de Roma.</p>";
					break;

				case "tigre":
					echo "<p>Três pratos de trigo para três tigres tristes.</p>";
					break;

				case "mafa":
					echo "<p>Quem amafagar um mafagafinho bom amafagafador será.</p>";
					break;
				
				default:
					echo "<p>Trava-língua não encontrado.</p>";
					break;
			}
		}
	?>
</form>
</body>
</html>