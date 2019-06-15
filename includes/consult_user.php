<?php
    include('db.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fecha_inicio = $_POST['startDate'];
        $fecha_final = $_POST['endDate'];

        $sql = "SELECT usuario.nombre as nombre,cobro.cantidad as cantidad,cobro.fecha as fecha FROM cobro INNER JOIN usuario 
                ON cobro.id_usuario = usuario.id WHERE cobro.fecha between '$fecha_inicio' AND '$fecha_final'";
        $consulta = mysqli_query($conn, $sql) or die(mysqli_error($conn));

        if (mysqli_num_rows($consulta) > 0){
            while($row = mysqli_fetch_assoc($consulta)){
                echo $row['nombre'].$row['cantidad'].$row['fecha']."<br>";
            }
        }else{
            echo "0 resultados";
            echo("<button onclick=\"location.href='../views/admin.html'\">Regresar</button>");
        }
    }else{
        $telefono = $_GET['telUser'];
        
        $sql = "SELECT usuario.nombre as nombre,cobro.cantidad as cantidad,cobro.fecha as fecha FROM cobro INNER JOIN usuario 
                ON cobro.id_usuario = usuario.id WHERE usuario.telefono = '$telefono'";
        $consulta = mysqli_query($conn, $sql) or die(mysqli_error($conn));

        if (mysqli_num_rows($consulta) > 0){
            while($row = mysqli_fetch_assoc($consulta)){
                echo $row['nombre'].$row['cantidad'].$row['fecha'];
            }
        }else{
            echo "Usuario no encontrado";
            echo("<button onclick=\"location.href='../views/admin.html'\">Regresar</button>");
        }
    }
?>