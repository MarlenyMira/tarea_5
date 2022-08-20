<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUNDIPG</title>
    <link rel="stylesheet" href="./css/secre.css">
    <link rel="stylesheet" href="./css/mero_admin.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/6ae072d0a0.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <section id="menu">
        <div class="logo">
            <img src="../assets/images/fundipg_log.png" alt="">
            <h2>Autenticación</h2>
        </div>
        <div class="items">
            <li><i class="fa fa-book"></i><a onclick="location.replace('instru_inicio')">Inicio</a></li>
            <li><i class="fa fa-book"></i><a onclick="location.replace('crear_salones.php')">Salones</a></li>
            <li><i class="fa fa-book"></i><a onclick="location.replace('crear_eventos.php')">Eventos</a></li>
            <li><i class="fa fa-book"></i><a onclick="location.replace('control_eventos.php')">Control Eventos</a></li>
            <li><i class="fa fa-book"></i><a onclick="location.replace('asignar_eventos.php')">Asignar Eventos</a></li>
           <li><i class="fa fa-book"></i><a onclick="location.replace('./index.php')">Cerrar Sessión</a></li>

        </div>
    </section>

    <section id="interface">
        <div class="navigation">
            <div class="n1">
                <div>
                   <i id="menu-btn" class="fa fa-bars"></i>
                </div>

                <div class="search">
                    <i class="fa fa-building"></i>
                    <h3>Autenticación de Dos Factores </h3>
                </div>
            </div>
            <div class="profile">
                <i class="fa fa-user-circle"></i>
            </div>
        </div>