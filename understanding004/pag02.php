<!DOCTYPE html>
<html>
<head>
	<title>PHP - Repetição</title>
	<meta charset="utf-8">
</head>
<body>
<form action="" method="post">
	<p>
		<label>Digite um número:</label>
		<input type="number" name="num" min="1" max="30" value="1">
	</p>
	<p>
		<input type="submit" name="btnfor" value="comando for">
		&nbsp; &nbsp; &nbsp;
		<input type="submit" name="btnwhile" value="comando while"><br>
	</p>
</form>
<hr>
<p>&nbsp</p>
<?php
	if (isset($_POST["btnfor"])) {
		# btnfor

		$num = $_POST["num"];
		echo "<h1>Utilizando o comando for</h1>";
		for ($i=1; $i <= $num ; $i++) { 
			echo "<h3 style='color:green;'>$i</h3>";
		}
	}
	elseif (isset($_POST["btnwhile"])) {
		# btnwhile
		echo "<h1>Utilizando o comando while</h1>";
		$i = 1;
		$num = $_POST["num"];
		while ($i <= $num) {
			echo "<h3 style='color:red;'>$i</h3>";
			$i++;
		}
	}
?>
<button><a href="index.php">index</a></button>
<button><a href="pag03.php">pag03</a></button>
</body>
</html>