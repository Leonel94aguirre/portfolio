<?php

$pg = "inicio";

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="inicio">
    <?php include_once "header.php"; ?>
    <main class="container">
        <div class="row">
            <div class="col-12 col-sm-12 mt-4 text-center div-cohete">
                <a href="proyectos.php"><img src="images/cohete.svg" class="cohete"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 offset-sm-3 text-center">
                <div class="input-home">
                    <p class="p-1">Bienvenid@ a mi sitio web.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 text-center">
                <a href="proyectos.php" class="btn shadow btn-blanco">Conoce mis proyectos</a>
            </div>
        </div>
    </main>
    <footer class="container my-4">
        <div class="row">
            <div class="col-12 col-sm-3 text-center text-sm-start">
                <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i>
                    <a href="https://www.linkedin.com" target="_blank" title="Linkedin"><i
                            class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3 text-center text-sm-start">Sponsor <a href="http://depcsuite.com.ar"
                    target="_blank">DePC Suite</a>
            </div>
            <div class="col-12 col-sm-3 text-center text-sm-start"><a
                    href="to:aguirreleonel194@gmail.com">aguirreleonel194@gmail.com</a></div>
        </div>
        <div class="bloque-whatsapp">
            <a href="https://web.whatsapp.com/" target="_blank"><i class="fab fa-whatsapp pb-4 pt-3 px-3"></i></a>
        </div>
    </footer>
</body>
<script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>