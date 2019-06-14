<?php
    include("db.php");
    $cantidad = $_POST['cantCobro'];
    $telefono = $_POST['telCobro'];
    $fecha = date("Y/m/d");
    $checkb = $_POST['allUsers'];

    //si esta vacio se aplica a un solo usuario
    if($checkb == '')
    {
        //revisar si existe algun cobro de dicho usuario
        $filas = "SELECT * FROM cobro inner Join usuario on cobro.id_usuario=usuario.id where usuario.telefono = '$telefono'";
        $sql_id = "SELECT id FROM usuario WHERE telefono = '$telefono'";
        $consulta = mysqli_query($conn,$filas) or die(mysqli_error($conn));
        $consulta_id = mysqli_query($conn,$sql_id) or die(mysqli_error($conn));
        $contenido = mysqli_fetch_array($consulta);
        $id = mysqli_fetch_array($consulta_id);

        if($contenido > 0)
        {
            $sql = "UPDATE cobro SET cantidad = (cantidad + '$cantidad'), fecha = '$fecha' where id_usuario = '$id[0]'";
            $consulta = mysqli_query($conn,$sql) or die(mysqli_error($conn));
            echo "Cobro actualizado";
            echo("<button onclick=\"location.href='../views/admin.html'\">Regresar</button>");
        }else{
            $sql = "INSERT INTO bsjoc29n2gfuxyr4bn8l.cobro (id_cobro,cantidad,fecha,id_usuario) 
            values (null, '$cantidad', '$fecha', '$id')";
            echo "Cobro agregado.";
            echo("<button onclick=\"location.href='../views/admin.html'\">Regresar</button>");
        }

    }else{
        echo $cantidad.$nombre.$checkb;
    }

    /*$sql = "INSERT INTO bsjoc29n2gfuxyr4bn8l.usuario (id,nombre,telefono,correo,id_rol,contraseña) 
            values (null, '$nombre', '$telefono', '$correo', 2, '$contraseña')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    echo("<button onclick=\"location.href='../views/admin.html'\">Back to Home</button>");*/
?>