<?php
    session_start();
    include_once("connection.php");
    // print_r($_POST);
    echo('<br><br>');
    // print_r($_SESSION);
    echo('<br><br>');

    $idpessoa = $_SESSION['idpessoa_login'];
    $name     = strtoupper(mysqli_escape_string($conn, $_POST["name"]));
    $lastname = strtoupper(mysqli_escape_string($conn, $_POST["lastname"]));
    $tel      = mysqli_escape_string($conn, $_POST["tel"]);
    $yo       = mysqli_escape_string($conn, $_POST["yo"]);
    $email    = strtolower(mysqli_escape_string($conn, $_POST["email"]));
    $password = mysqli_escape_string($conn, $_POST["password"]);
    $street   = mysqli_escape_string($conn, $_POST["street"]);
    $num      = mysqli_escape_string($conn, $_POST["num"]);
    $cep      = mysqli_escape_string($conn, $_POST["cep"]);
    $city     = mysqli_escape_string($conn, $_POST["city"]);
    $state    = strtoupper(mysqli_escape_string($conn, $_POST["state"]));

    $address  = ucwords($street . ', ' . $num . ', ' . $city . ' - ' . $state . ', ' . $cep);
    // echo($idpessoa . $name . $lastname . $tel . $yo . $email . $password . $address);

    $sqlpessoa = "UPDATE tbpessoa SET Nome='".$name."',Sobrenome='".$lastname."', Telefone='".$tel."', Idade='".$yo."', Endereco='".$address."' WHERE idpessoa='".$idpessoa."';";

    $sqllogin = "UPDATE tb_login SET nome='".$name."', login='".$email."', senha='".$password."' WHERE idpessoa_login='".$idpessoa."';";

    if(!mysqli_query($conn, $sqlpessoa)) {
        echo("Error 1");
    } 
    if(!mysqli_query($conn, $sqllogin)) {
        echo("Error 2: " . mysqli_error($conn));
    } 
    session_unset();
    $_SESSION['idpessoa_login'] = $idpessoa;
    $_SESSION['password'] = $password;
    header("location:logged.php");
?>