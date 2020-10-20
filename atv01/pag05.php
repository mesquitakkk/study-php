<!DOCTYPE html>
<html>
<head>
	<title>pag05.php</title>
	<meta charset="utf-8">	
</head>
<body>
<h1 class="text">Hino Nacional Brasileiro</h1>
<p class="text">
Ouviram do Ipiranga às margens plácidas<br>
De um povo heróico o brado retumbante,<br>
E o sol da liberdade, em raios fúlgidos,<br>
Brilhou no céu da Pátrianesse instante,<br><br>
Se o penhor dessa igualdade<br>
Conseguimos conquistar com braço forte,<br>
Em teu seio, ó, Liberdade,<br>
Desafia o nosso peito a própria morte!<br><br>
Ó Pátria amada, Idolatrada, Salve! Salve!<br><br>
Brasil, um sonho intenso, um raio vívido,<br>
De amor e de esperança à terra desce,<br>
Se em teu formoso céu, risonho e límpido,<br>
A imagem do Cruzeiro resplandece.<br><br>
Gigante pela própria natureza,<br>
És belo, és forte, impávido colosso,<br>
E o teu futuro espelha essa grandeza.<br><br>
Terra adorada, Entre outras mil,<br>
És tu, Brasil, Ó Pátria amada!<br>
Dos filhos deste solo és mãe gentil,<br>
Pátria amada, Brasil!<br><br>
</p>
</body>
</html>
<?php 
	$cor = $_POST["cor"];
	$font = $_POST["font"];
	$alinhamento = $_POST["alinhamento"];
	$linha_altura = $_POST["linha_altura"];
	echo "<style>";
	echo ".text{color: $cor;}";
	echo "body{font-family: $font;}";
	echo "body{text-align: $alinhamento;}";
	echo "p{line-height: $linha_altura"."px;}";
	echo "</style>";
?>