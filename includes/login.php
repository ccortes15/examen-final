<?php
    include("db.php");
    session_start();
    error_reporting(0);

    $usuario = $_POST['user'];
    $contraseña = $_POST['pass'];

    $query = "SELECT * FROM usuario WHERE telefono = '$usuario' AND contraseña = '$contraseña'";
    $consulta = mysqli_query($conn,$query) or die(mysqli_error($conn));
    $user_log = mysqli_fetch_array($consulta);
    
    if(count($user_log) > 0){
        $_SESSION['id'] = $user_log[0];

        if($user_log[4] == 1){
            header("location: ../views/admin.html");
        }else{
            header("location: ../views/register.html");
        }
    }
    else{
        echo "Usuario no registrado <br>";
        echo("<button onclick=\"location.href='../index.html'\">Regresar</button>");
    };
?>