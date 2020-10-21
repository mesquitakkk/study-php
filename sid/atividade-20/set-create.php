<?php
    session_start();
    session_unset();
    header('location:create-user.php');
?>