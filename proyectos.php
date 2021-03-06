<?php

$pg = "proyectos";

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="proyectos">
    <?php include_once "header.php"; ?>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-4 pb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Los siguientes son algunos de los trabajos que vemos en clase:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-4 proyecto">
                <div class="m-1 border bg-white">
                    <img src="images/abmclientes.png" alt="AMB clientes" class="img-fluid">
                    <div class="col-12 color-gradiente bg-danger py-2 ps-3">
                        <h3>AMB CLIENTES</h3>
                    </div>
                    <div class="col-12 px-3 py-2">
                        <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap
                            y
                            Json.</p>
                    </div>
                    <div class="row pb-4">
                        <div class="col-6 p-0 ps-4">
                            <a href="https://to:aguirreleonel194@gmail.com" class="btn btn-rojo" target="_blank">Ver online</a>
                        </div>
                        <div class="col-6 p-0 text-center">
                            <a href="https://github.com" class="btn-link" target="_blank">Codigo fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 proyecto">
                <div class="m-1 border bg-white">
                    <img src="images/abmventas.png" alt="AMB ventas" class="img-fluid">
                    <div class="col-12 bg-danger  py-2 ps-3">
                        <h3>SISTEMA DE GESTIÓN DE VENTAS</h3>
                    </div>
                    <div class="col-12 px-3 py-2">
                        <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC,
                            Bootstrap,
                            Js, Ajax, jQuery y MySQL de base de datos.</p>
                    </div>
                    <div class="row pb-4">
                        <div class="col-6 p-0 ps-4">
                            <a href="https://to:aguirreleonel194@gmail.com" class="btn btn-rojo" target="_blank">Ver online</a>
                        </div>
                        <div class="col-6 p-0 text-center">
                            <a href="https://github.com" class="btn-link" target="_blank">Codigo fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 proyecto">
                <div class="m-1 border bg-white">
                    <img src="images/proyecto-integrador.png" alt="proyecto integrador" class="img-fluid">
                    <div class="col-12 color-gradiente bg-danger py-2 ps-3">
                        <h3>PROYECTO INTEGRADOR</h3>
                    </div>
                    <div class="col-12 px-3 py-2">
                        <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS,
                            Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y
                            funcionalidades a fines.</p>
                    </div>
                    <div class="row pb-4">
                        <div class="col-6 p-0 ps-4">
                            <a href="https://to:aguirreleonel194@gmail.com" class="btn btn-rojo" target="_blank">Ver online</a>
                        </div>
                        <div class="col-6 p-0 text-center">
                            <a href="https://github.com" class="btn-link" target="_blank">Codigo fuente</a>
                        </div>
                    </div>
                </div>
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