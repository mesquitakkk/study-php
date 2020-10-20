<?php
    include("connection/connection.php");
    print_r($_POST);

    // escape em caracteres maliciosos
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["pass"]);

    // montando consulta SQL
    $sql = "SELECT * FROM tb_login WHERE login='".$email."' and senha='".$password."';";

    // realizando consulta SQL e armazenando seu retorno
    $retorno_login = mysqli_query($conn, $sql);

    // print_r(($retorno_login));
    echo("<br><br>");

    // Verificando linhas retornadas (se igual à 1, existe o registro solicitado)
    if (mysqli_num_rows($retorno_login) == 1) {
        echo("usuário existe!");
    } else {
        echo("usuário não existe!");
    }

    echo("<br><br>");

    // lendo os conteúdos do banco
    $dados_de_retorno = mysqli_fetch_array($retorno_login);
    print_r($dados_de_retorno);
    echo("<br><br>");

    foreach($dados_de_retorno as $key => $value) {
        if(!is_numeric($key)){
            echo($key . " : ");
            echo($value);
            echo("<br>");
        }
    }
?>