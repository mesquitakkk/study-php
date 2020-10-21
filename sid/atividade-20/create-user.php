<?php
    session_start();
    include_once('connection.php');
    mysqli_set_charset($conn, 'utf-8');
    function verify($var){
        if(isset($_SESSION[$var])){
            echo("value='".$_SESSION[$var]."'");
        }
    }
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <title>
        <?php
            if(isset($_SESSION['mode'])) {
                echo("Edit");
            }else {
                echo("Register");
            }
        ?>
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/create.css">
</head>
<div class="box">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>
                    <?php
                        if(isset($_SESSION['mode'])) {
                            echo("Edit");
                        }else {
                            echo("Register");
                        }
                    ?>
                </h1>
            </div>
        </div>
        <?php
        // print_r($_SESSION);
        ?>
        <form action=
        <?php
            if(isset($_SESSION['mode'])) {
                if($_SESSION['mode'] == 'edit'){
                    echo("back-edit-user.php");
                }
            }
            else {
                echo("back-create.php");
            }
        ?>
        method="POST">
            <div class="row">
                <div class="col">
                    <h5>Personal data</h5>
                </div>
            </div>
        <div class="row">
            <div class="col">
                <input type="text" name="name" id="create-form-name" placeholder="name" required 
                <?php 
                    verify('Nome');
                ?>>
            </div>
            <div class="col">
                <input type="text" name="lastname" id="create-form-lastname" placeholder="last name" required 
                <?php 
                    verify('Sobrenome');
                ?>
                >
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="tel" name="tel" id="create-form-tel" placeholder="tel" required
                pattern="[0-9]{2}[0-9]{9}" 
                <?php 
                    verify('Telefone');
                ?>
                >
            </div>
            <div class="col">
                <input type="number" name="yo" id="create-form-yo" max="120" min="0" placeholder="yo" required 
                <?php 
                   verify('Idade');
                ?>
                >
            </div>
        </div>
        <div class="row">
            <div class="col"><h5>Login</h5></div>
        </div>
        <div class="row">
            <div class="col">
                <input type="email" name="email" id="create-form-email" placeholder="email" required 
                <?php
                    verify('email');
                ?>
                >
            </div>
            <div class="col">
                <input type="password" name="password" id="create-form-password" placeholder="password" required 
                <?php
                    verify('password');
                ?>
                >
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h5>Address</h5>
            </div>
            <?php
                if(isset($_SESSION['Endereco'])) {
                    $address = explode(', ', $_SESSION['Endereco']);
                    $city = explode(' - ', $address[2])[0];
                    $state = explode(' - ', $address[2])[1];
                    // print_R($address);
                    // echo("<br><br>");
                    // print_R($_SESSION['Endereco']);
                    // echo($city);
                    // echo($state);
                }
            ?>
        </div>
        <div class="row">
            <div class="col-6">
                <input type="text" name="street" id="create-form-street" placeholder="street" required
                <?php
                    if(isset($_SESSION['mode'])) {
                        if ($_SESSION['mode'] == 'edit'){
                            echo("value='".$address[0]."'");
                        }
                    }
                ?>
                >
            </div>
            <div class="col">
                <input type="number" name="num" id="create-form-num" placeholder="no" min="0" required
                <?php
                    if(isset($_SESSION['mode'])){
                        if($_SESSION['mode'] == 'edit') {
                            echo("value='".$address[1]."'");
                        }
                    }
                ?>
                >
            </div>
            <?php
            // print_r($address);
            ?>
            <div class="col">
                <input type="text" name="cep" id="create-form-cep" placeholder="CEP" required pattern="[0-9]{5}-[0-9]{3}"
                <?php
                    if(isset($_SESSION['mode'])){
                        if($_SESSION['mode'] == 'edit') {
                            echo("value='".$address[3]."'");
                        }
                    }
                ?>
                >
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="text" name="city" id="create-form-city" placeholder="city"
                <?php
                    if(isset($_SESSION['mode'])){
                        if($_SESSION['mode'] == 'edit') {
                            echo("value='".$city."'");
                        }
                    }
                ?>
                >
            </div>
            <div class="col">
                <select type="text" name="state" id="create-form-estado" maxlength="2" placeholder="state" required>
                    <option value="">Selecione</option>
                    <?php 
                        $sql = "SELECT Sigla, Nome from tbestados ORDER BY Nome;";
                        $queryEstados = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($queryEstados) > 0) {
                            while($eachState = mysqli_fetch_array($queryEstados)) {
                                if ($_SESSION['mode'] == 'edit') {
                                    if ($eachState['Sigla'] == $state){
                                        echo("<option value='".$eachState['Sigla']."' selected>".$eachState['Nome']."</option>");
                                    }else{
                                        echo("<option value='".$eachState['Sigla']."'>".$eachState['Nome']."</option>");
                                    }
                                } else {
                                    echo("<option value='".$eachState['Sigla']."'>".$eachState['Nome']."</option>");
                                }
                            }
                        }
                    ?>
                </select>
            </div>
        </div>
        <?php
            if(isset($_SESSION["ERROR"])) {
                echo('  <div class="row">
                        <div class="col" class="alert alert-danger" role="alert">
                        <div class="alert alert-danger" role="alert">'.
                        $_SESSION["ERROR"].'
                        </div>
                        </div>
                        </div>');
                unset($_SESSION["ERROR"]);
            }
        ?>
        <input type="submit" name="create" value=
        <?php
            if(isset($_SESSION['mode'])){
                if($_SESSION['mode'] == 'edit') {
                    echo('"Edit"');
                } else {
                    echo('"Create"');
                }
            }
        ?>
        class="btn btn-dark">
        </form>
        <a href=
        <?php
            if(isset($_SESSION['mode'])){
                if($_SESSION['mode'] == 'edit'){
                    echo('"logged.php"');
                }
            }else{
                echo('"index.php"');
            }
        ?>
        ><button class="btn btn-dark">Back</button></a>  
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>