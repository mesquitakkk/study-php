<?php
    session_start();
    include("connection.php");

    $email = mysqli_escape_string($conn, $_POST["email"]);
    $password = mysqli_escape_string($conn, $_POST["password"]);

    $sql = "SELECT * FROM tb_login WHERE login='".$email."' and senha='".$password."';";
    $query = mysqli_query($conn, $sql);

    if(mysqli_num_rows($query) == 1) {
        // removendo os valores duplos
        $fetch = mysqli_fetch_array($query);
        foreach($fetch as $key => $value) {
            if (!is_numeric($key)){
                $rlogin[$key] = $value;
            }
        }

        // query tbpessoa
        $idpessoa_login = 'idpessoa_login';
        $sqltbpessoa = "SELECT * FROM tbpessoa WHERE idpessoa='".$rlogin[$idpessoa_login]."';";

        $querypessoa = mysqli_query($conn, $sqltbpessoa);
        // removendo valores duplos
        $fetchpessoa = mysqli_fetch_array($querypessoa);
        foreach($fetchpessoa as $key => $value) {
            if (!is_numeric($key)){
                $rpessoa[$key] = $value;
            }
        }
        $_SESSION = $rpessoa;
        header('location:logged.php');
    } else {
        $_SESSION["ERROR"] = "Usuário ou senha inválidos.";
        $_SESSION["email"] = $email;
        header("location:index.php");
    }
?>