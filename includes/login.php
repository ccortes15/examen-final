<?php
    include("db.php");
    session_start();

    $usuario = $_POST['user'];
    $contraseña = $_POST['pass'];

    $query = "SELECT * FROM usuario WHERE telefono = '$usuario' AND contraseña = '$contraseña'";
    $consulta = mysqli_query($conn,$query) or die(mysqli_error($conn));
    $user_log = mysqli_fetch_array($consulta);
    
    if(count($user_log) > 0){
        $_SESSION['username'] = $usuario;

        if($user_log[4] == 1){
            header("location: ../php/admin.php");
        }else{
            header("location: ../php/user.php");
        }
    }
    else{
        echo "Usuario no registrado <br>";
        echo("<button onclick=\"location.href='../index.html'\">Regresar</button>");
    };
?>