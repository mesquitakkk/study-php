<!DOCTYPE html>
<html>
<head>
	<title>PHP - Atividade 3</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<form action="" method="post">
		<label>Escolha uma cor de fundo: </label>
		<select name="color">
			<option value=""></option>
			<option value="red">Vermelho</option>
			<option value="blue">Azul</option>
			<option value="yellow">Amarelo</option>
			<option value="pink">Rosa</option>
		</select><br><br>
		<label>Escolha o texto: </label>
		<select name="text">
			<option value=""></option>
			<option value="lorem">Lorem ipsum</option>
			<option value="hino1">Hino parte 1</option>
			<option value="hino2">Hino parte 2</option>
		</select><br><br>
		<label>Escolha a posição da imagem: </label>
		<select name="img_position">
			<option value=""></option>
			<option value="none">Nenhum</option>
			<option value="right">Direita</option>
			<option value="left">Esquerda</option>
		</select><br><br>
		<input type="submit" value="carregar" name="btnEnviar">
		<img src="" style="width: ">
	</form>
	<hr>
<footer>Lucas Mesquita de Souza</footer>
<?php
	if (isset($_POST["btnEnviar"]) and !empty($_POST["color"]) and !empty($_POST["text"]) and !empty($_POST["img_position"])) {
		$color = $_POST["color"];
		$text = $_POST["text"];
		$img_position = $_POST["img_position"];

		#estrutura
		echo "<div id='div1'>";

		# posição da imagem
		if ($img_position == "none") {
			# nenhum
			echo "<img src='img/dale.jpg' style='width: 20%; margin: 10px;'>";
		}
		if ($img_position == "right") {
			# direita
			echo "<img src='img/dale.jpg' style='width: 20%; margin: 10px; float: right;'>";
		}
		if ($img_position == "left") {
			# esquerda
			echo "<img src='img/dale.jpg' style='width: 20%;float: left; margin: 10px;'>";
		}
		# texto
		switch ($text) {
			case 'lorem':
			# lorem ipsum
				echo "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>";
				break;
			
			case 'hino1':
			# hino parte 1
				echo "<p class='hino'>Ouviram do Ipiranga as margens plácidas<br>
				De um povo heroico o brado retumbante,<br>
				E o sol da Liberdade, em raios fúlgidos,<br>
				Brilhou no céu da Pátria nesse instante.<br><br>

				Se o penhor dessa igualdade<br>
				Conseguimos conquistar com braço forte,<br>
				Em teu seio, ó Liberdade,<br>
				Desafia o nosso peito a própria morte!<br><br>

				Ó Pátria amada,<br>
				Idolatrada,<br>
				Salve! Salve!<br><br>

				Brasil, um sonho intenso, um raio vívido,<br>
				De amor e de esperança à terra desce,<br>
				Se em teu formoso céu, risonho e límpido,<br>
				A imagem do Cruzeiro resplandece.<br><br>

				Gigante pela própria natureza,<br>
				És belo, és forte, impávido colosso,<br>
				E o teu futuro espelha essa grandeza.<br><br>

				Terra adorada<br>
				Entre outras mil<br>
				És tu, Brasil,<br>
				Ó Pátria amada!<br><br>

				Dos filhos deste solo<br>
				És mãe gentil,<br>
				Pátria amada,<br>
				Brasil!</p>";
				break;

			case 'hino2':
			# segunda parte do hino
				echo "<p class='hino'>Deitado eternamente em berço esplêndido,<br>
				Ao som do mar e à luz do céu profundo,<br>
				Fulguras, ó Brasil, florão da América,<br>
				Iluminado ao sol do Novo Mundo!<br><br>

				Do que a terra mais garrida<br>
				Teus risonhos, lindos campos têm mais flores,<br>
				'Nossos bosques têm mais vida',<br>
				'Nossa vida' no teu seio 'mais amores'. <br><br>

				Ó Pátria amada,<br>
				Idolatrada,<br>
				Salve! Salve!<br><br>

				Brasil, de amor eterno seja símbolo<br>
				O lábaro que ostentas estrelado,<br>
				E diga o verde-louro dessa flâmula<br>
				- Paz no futuro e glória no passado.<br><br>

				Mas se ergues da justiça a clava forte,<br>
				Verás que um filho teu não foge à luta,<br>
				Nem teme, quem te adora, a própria morte.<br><br>

				Terra adorada<br>
				Entre outras mil<br>
				És tu, Brasil,<br>
				Ó Pátria amada!<br><br>

				Dos filhos deste solo<br>
				És mãe gentil,<br>
				Pátria amada,<br>
				Brasil!</p>";
				break;
			default:
				# texto não encontrado
				echo "<h2>Texto não encontrado</h2>";
				break;	
}
		echo "</div>";

		# background-color
		if ($color == "red") {
			# Vermelho
			echo "<style>
			#div1 {
			position: absolute;
			width: 95%;
			padding: 10px;
			background-color: #FF2222;
			}
			</style>";
		}
		if ($color == "blue") {
			# Azul
			echo "<style>
			#div1 {
			position: absolute;
			width: 95%;
			padding: 10px;
			background-color: #87CEFA;
			}
			</style>";
		}
		if ($color == "yellow") {
			# Amarelo
			echo "<style>
			#div1 {
			position: absolute;
			width: 95%;
			padding: 10px;
			background-color: #F0E68C;
			}
			</style>";
		}
		if ($color == "pink") {
			# Rosa
			echo "<style>
			#div1 {
			position: absolute;
			width: 95%;
			padding: 10px;
			background-color: #FF69B4;
			}
			</style>";
		}
		#gambiarra 	
		if ($img_position == "left") {
			echo "<style>.hino {text-align: right;}</style>";
		}
	}
?>
</body>
</html>