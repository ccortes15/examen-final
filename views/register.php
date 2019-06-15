<?php
    session_start();
    $nombre = $_SESSION['nombre'];
    $correo = $_SESSION['correo'];
    $telefono = $_SESSION['telefono'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/admin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Estado de cuenta</title>
</head>
<body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark float-right">
            <span class="navbar-text">
                Dashboard
            </span>
    
            <ul class="navbar-nav d-flex justify-content-end">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#!">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#!">Configuración</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../includes/logout.php">Cerrar sesión</a>
                </li>
                <li>
                    <button id="rowS" >Create row</button>
                </li>
            </ul>
        </nav>
    
        <aside class="bg-info float-left">
            <div class="w-100 mx-auto d-flex justify-content-center mt-2">
                <img src="img/user.jpg" class="rounded-circle w-50">
            </div>
            
            <hr>
    
            <div class="w-100 mx-auto text-center">
                <p class="text-white"><?php echo $nombre; ?></p>
                <p class="text-white"><?php echo $telefono; ?></p>
                <p class="text-white"><?php echo $correo; ?></p>
            </div>
    
            <hr>
        </aside>
    
        <section class=" float-right">
            <table class="pagos" id="tbl_pagos">
                <thead>
                    <tr>
                        <th scope="col">No. de pago</th>
                        <th scope="col">Pago actual</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Balance</th>
                    </tr>
                </thead>
            </table>
            <table class="cobros" id="tbl_cobros">
                    <thead>
                        <tr>
                            <th scope="col">No. de cobro</th>
                            <th scope="col">Suma de deuda</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Balance</th>
                        </tr>
                    </thead>
                </table>
        </section>
    
        <script src="../js/tbl.js"></script>
    </body>
</html>