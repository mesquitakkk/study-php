<?php
	session_start();
	if ($_SESSION["username"] == "") {
		$_SESSION["username"] = $_POST["usernamepost"];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>JOKENPO - Atividade 08</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="container">
	<br>
	<h1>JO KEN PO!</h1>
	<h3>Faça sua jogada</h3>
	<br><br>
	<div id="game-container1">
		<br><br>
		<form action="" method="post">
			<input type="radio" name="userchoice" id="pedra" value="pedra" required>
			<label>Pedra</label><br>
			<input type="radio" name="userchoice" id="papel" value="papel">
			<label>Papel</label><br>
			<input type="radio" name="userchoice" id="tesoura" value="tesoura">
			<label>Tesoura</label><br><br>
			<input type="submit" value="Enviar" name="btnEnviar" class="btn btn-dark">
		</form>
		<br><a href="index.php"><button class="btn btn-danger">Sair</button></a>
	</div>
	<?php
		if (isset($_POST["btnEnviar"])) {
			// fazendo a jogada da máquina
			$machinechoice = rand(1, 3);
			if ($machinechoice == 1) {
				$machinechoice = "pedra";
			} elseif ($machinechoice == 2){
				$machinechoice = "papel";
			} else {
				$machinechoice = "tesoura";
			}

			// analisando escolhas
			$userchoice = $_POST["userchoice"];
			$resultado = "";

			// casos em que usuário empata
			if ($userchoice == $machinechoice) {
				$resultado = "empate";
			} 
			else {
				// usuário ganha
				if ($userchoice == "pedra" and $machinechoice == "tesoura") {
					$resultado = "vitoria";
				}
				elseif ($userchoice == "papel" and $machinechoice == "pedra"){
					$resultado = "vitoria";
				}
				elseif ($userchoice == "tesoura" and $machinechoice == "papel"){
					$resultado = "vitoria";
				}
				// usuário perde
				else {
					$resultado = "derrota";
				}
			}
			if ($resultado == "empate") {
				echo "<div id='game-container-empate'>";
				echo "<br>";
				echo "Empatou!";
				echo "<br>";
			}
			elseif ($resultado == "vitoria"){
				$_SESSION["userscore"] = $_SESSION["userscore"] + 1;
				echo "<div id='game-container-win'>";
				echo "<br>";
				echo "Você ganhou!";
				echo "<br>";
			}
			elseif ($resultado == "derrota"){
				$_SESSION["machinescore"] = $_SESSION["machinescore"] + 1;
				echo "<div id='game-container-lose'>";
				echo "<br>";
				echo "Você perdeu!";
				echo "<br>";
			}
			echo "<br>
			<p id='player-choice'>Sua Jogada: </p>
			<p>Jogada da máquina:</p>
			<img src='img/" . $userchoice . ".png' id='img1'>
			<img src='img/" . $machinechoice . ".png' id='img2'><br><br>
			<p>". $_SESSION['username'] . ": " . $_SESSION['userscore'] . "</p>
			Máquina: " . $_SESSION['machinescore'] . "
			</div>";
		}
	?>
	<footer>Lucas Mesquita de Souza</footer>
</body>
</html>