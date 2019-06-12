<?php
    include_once 'includes/db.php';

    session_start();

    if(isset($_GET['cerrar_sesion'])){
        session_unset();
        session_destroy();
    }

    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                header('location: views/admin.php');
            break;

            case 2:
                header('location: views/register.html');
            break;

            default;
        }
    }

    if(isset($_POST['tel']) && isset($_POST['pass'])){
        $telefono = $_POST['tel'];
        $password = $_POST['pass'];

        $db = new Database();
        $query = $db->connect()->prepare('SELECT * FROM usuario WHERE telefono = :tel AND contraseña = :pass');
        $query->execute(['tel' => $telefono, 'pass' => $password]);
        echo $telefono . $password;
    }
?>