<?php 
    session_start();
    $_SESSION['mode'] = 'edit';
    header("location:create-user.php");
?>