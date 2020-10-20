<?php
    session_start();
    include("connection.php");

    // foreach($_POST as $key => $value) {
    //     echo("<p>". $key . "->" . $value ."</p>");
    // }

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

    // echo($name . $lastname . $tel . $yo . $email . $password . $street . $num . $cep . $city . $city . $state . $address);

    $sql = "SELECT * FROM tb_login WHERE login='".$email."';";
    $query = mysqli_query($conn, $sql);

    // echo(mysqli_num_rows($query));

    // verify if the email is already registered
    if(mysqli_num_rows($query) > 0) {
        $_SESSION["ERROR"] = "E-mail is not available.";
        header("location:create-user.php");
    } else {
        // insert new user on db

        $sql = "INSERT INTO tbpessoa(Nome, Sobrenome, Telefone, Idade, Endereco, CEP)
                VALUES('". $name."', '". $lastname ."', '". $tel ."', '". $yo ."', '". $address ."', '".$cep."');";

        if(!mysqli_query($conn, $sql)){
            echo("Erro " . mysqli_error($conn));
        } else {
            $id = mysqli_insert_id($conn);
            
            $sqlLogin = "INSERT INTO tb_login(nome, login, senha, idpessoa_login)
                VALUES('".$name."','".$email."', '".$password."', '".$id."');";

            if (!mysqli_query($conn, $sqlLogin)) {
                echo("Error: " . mysqli_error($conn));
            } else {
                $_SESSION["SUCCESS"] = "Registered successfully";
                header("location:index.php");
            }
        }
    }
?>