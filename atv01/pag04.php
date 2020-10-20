<!DOCTYPE html>
<html>
<head>
	<title>pag04</title>
	<meta charset="utf-8">
	<style type="text/css">
		.container {
			width: 800px;
			margin-left: auto;
			margin-right: auto;
		}
		.center {
			text-align: center;
		}
	</style>
</head>
<body>
<div class="container">
	<h1 class="center">Hino Nacional Brasileiro</h1>
	<p class="center">Escolha como vc quer ver o Hino Nacional Brasileiro:</p>
	<form action="pag05.php" target="_blank" method="post">
		<!-- Cor -->
		<label>Escolha uma cor: </label>
		<select name="cor">
			<option value="red">Vermelho</option>
			<option value="green">Verde</option>
			<option value="blue">Azul</option> 
		</select><br><br><br>

		<!-- Fonte -->
		<label>Escolha uma fonte: </label>
		<select name="font">
			<option value="calibri">Calibri</option>
			<option value="consolas">Consolas</option>
			<option value="verdana">Verdana</option> 
			<option value="Comic Sans MS">Comic Sans MS</option> 
		</select><br><br><br>

		<!-- Alinhamento -->
		<label>Escolha o alinhamento: </label><br><br>	
		<input type="radio" name="alinhamento" value="center" id="center" checked>
		<label for="center">Centralizado</label><br>
		<input type="radio" name="alinhamento" value="left" id="left">
		<label for="left">Esquerda</label><br>
		<input type="radio" name="alinhamento" value="right" id="right">
		<label for="right">Direita</label><br><br><br>

		<!-- Altura da linha -->
		<label>Escolha a altura da linha (entre 15 e 40 pixels):</label>
		<input type="number" name="linha_altura" id="linha_altura" min="15" max="40"><br><br><br>

		<!-- Submit button -->
		<input type="submit" value="submit">
	</form>
</div>
</body>
</html>