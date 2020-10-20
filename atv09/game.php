<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Jogo da Forca! - Atividade 09</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
</head>
<body class="container">
<br>
<p><strong>Dica:</strong> é uma fruta.</p><br>
<form action="" method="POST">
	<label>Letra: </label>
	<input type="text" name="letter" maxlength="1" required><br><br>
	<input type="submit" name="btnsubmit" value="Confirmar" class="btn btn-dark">
</form>
	<br><a href="index.php"><button class="btn btn-danger">Sair</button></a>
<hr>
<?php
	$back_word_array = str_split($_SESSION["back_word"]);
	$wrong_letters = $_SESSION["wrong_letters"];
	if (isset($_POST["btnsubmit"])) {
		$have_letter_in = 0;
		for ($i=0; $i < count($back_word_array); $i++) { 
			if ($_POST["letter"] == $back_word_array[$i]) {
				$have_letter_in = 1;
			}
		}
		if ($have_letter_in == 0) {
			$wrong_letters = $wrong_letters + 1;
		}
		echo $have_letter_in;
	}
?>

<?php 
	#Exibição da imagem
	if ($wrong_letters == 1) {
		$_SESSION['image'] = "cabeca.png";
	} else if ($wrong_letters == 2) {
		$_SESSION['image'] = "corpo.png";
	} else if ($wrong_letters == 3) {
		$_SESSION['image'] = "braco1.png";
	} else if ($wrong_letters == 4) {
		$_SESSION['image'] = "braco2.png";
	} else if ($wrong_letters == 5) {
		$_SESSION['image'] = "perna1.png";
	} else if ($wrong_letters == 6) {
		$_SESSION['image'] = "perna2.png";
	}
?>

<img src="img/<?php echo $_SESSION["image"]; ?>" alt="forca">
	<!-- fim da exibição da imagem -->
</body>
</html>