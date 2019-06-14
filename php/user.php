<?php
    session_start();

    $usuario = $_SESSION['username'];

    if(!isset($usuario))
    {
        header('location: ../index.html');
    }
    else{
        header('location: ../views/register.html');
    }
?>