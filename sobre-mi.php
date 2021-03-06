<?php

$pg = "sobre-mi";

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mi</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="sobre-mi">
    <?php include_once "header.php"; ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-12 mt-4">
                    <h1 class="mt-sm-4 pb-sm-4">Sobre mí</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5 col-12 mt-4">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque corrupti expedita
                        repellendus,
                        nam consequatur totam cupiditate aspernatur non omnis ullam quas voluptas tenetur, placeat
                        dolorum
                        autem nihil maxime, mollitia error?</p>
                    <a href="contacto.php" class="btn btn-rojo">Enviar mensaje</a>
                </div>
                <div class="col-sm-3 col-12 offset-sm-2">
                    <img src="images/Leo.jpg" alt="Emiliano Leonel Aguirre" title="Emiliano Leonel Aguirre"
                        class="img-fluid rounded-circle img-foto">
                </div>
            </div>
        </div>
        <section id="tecnologias" class="bg-danger pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-white my-sm-5">Stack tecnológico</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 mb-4 pt-sm-5 py-sm-5 mb-sm-0 logo bg-white rounded">
                            <h3>Javascript</h3>
                            <img class="img-fluid mx-auto" width="60" src="images/javascript.jpeg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center pb-4">
                        <div class="px-4 py-5 mx-0 mb-4 pt-sm-5 py-sm-5 mb-sm-0 logo bg-white rounded">
                            <h3>PHP</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/PHP.jpg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 mb-4 pt-sm-5 py-sm-5 mb-sm-0 logo bg-white rounded">
                            <h3>HTML5</h3>
                            <img class="img-fluid mx-auto" width="60" src="images/HTML5.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 mb-4 pt-sm-5 py-sm-5 mb-sm-0 logo bg-white rounded">
                            <h3>React.js</h3>
                            <img class="img-fluid mx-auto" width="60" src="images/reactjs.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 mb-4 pt-sm-5 py-sm-5 mb-sm-0 logo bg-white rounded">
                            <h3>jQuery</h3>
                            <img class="img-fluid mx-auto" width="60" src="images/JQuery.jpg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 mb-4 pt-sm-5 py-sm-5 mb-sm-0 logo bg-white rounded">
                            <h3>Bootstrap</h3>
                            <img class="img-fluid mx-auto" width="60" src="images/Bootstrap.png">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 mb-4 pt-sm-5 py-sm-5 mb-sm-0 logo bg-white rounded">
                            <h3>Laravel</h3>
                            <img class="img-fluid mx-auto" width="90" src="images/Laravel.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 mb-4 pt-sm-5 py-sm-5 mb-sm-0 logo bg-white rounded">
                            <h3>MySQL</h3>
                            <img class="img-fluid mx-auto" width="60" src="images/MySQL.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 mb-4 pt-sm-5 py-sm-5 mb-sm-0 logo bg-white rounded">
                            <h3>CSS</h3>
                            <img class="img-fluid mx-auto" width="60" src="images/css.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 mb-4 pt-sm-5 py-sm-5 mb-sm-0 logo bg-white rounded">
                            <h3>Git</h3>
                            <img class="img-fluid mx-auto" width="60" src="images/git.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 mb-4 pt-sm-5 py-sm-5 mb-sm-0 logo bg-white rounded">
                            <h3>Apache</h3>
                            <img class="img-fluid mx-auto" width="123" src="images/Apache.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 mb-4 pt-sm-5 py-sm-5 mb-sm-0 logo bg-white rounded">
                            <h3>Mercadopago</h3>
                            <img class="img-fluid mx-auto" width="60" src="images/Mercadopago.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="experiencia" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-briefcase"></i> Experiencia laboral</h2>
                    <h4>Mi experiencia profesional se ha desarrollado en diferentes ámbitos como operario de producción,
                        electricista junior y ventas senior. Cada una de ellas me ha aportado competencias
                        transversales, contactos en diferentes sectores y un incalculable desarrollo profesional y
                        personal.
                        Mi objetivo es aplicar todo lo obtenido hasta ahora para lograr los mejores resultados posibles
                        en su compañía y seguir aprendiendo para obtener más conocimiento.
                    </h4>
                </div>
            </div>
            <div class="row shadow bg-white rounded">
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="images/Electricista.jpg" alt="electricista" title="Electricista"
                                class="img-fluid">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Electricista</h3>
                            <h4>Hernan Mancini construcciones</h4>
                            <h5>2021 - presente</h5>
                            <p>Montaje, instalación, mantenimiento y reparación de líneas eléctricas interior y exterior
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="images/KIOMAX.jpg" alt="kiomax" title="Kiomax drugstores" class="img-fluid">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Vendedor</h3>
                            <h4>Kiomax drugstores</h4>
                            <h5>2017 - 2020</h5>
                            <p> Asegurar la correcta atención al cliente y la venta según el Plan de Ventas.
                                Implantar nuevas políticas comerciales. Colaborar y poner en marcha las operaciones
                                comerciales.
                                Colocar, reponer y el balizar la mercancía.
                                Gestionar el stock de la sección .</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="images/CABELMA S.A..jpg" alt="cabelma" title="Cabelma S.A."
                                class="img-fluid">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Operario de produccion</h3>
                            <h4>Cabelma S.A.</h4>
                            <h5>2017 - 2017</h5>
                            <p> Preparación y embalaje de cajones.
                                Supervisión de correcta serigrafía.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="images/GRAFICA.png" alt="SEVAGRAF" title="sevagraf S.A." class="img-fluid">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Operario de produccion</h3>
                            <h4>Sevagraf S.A.</h4>
                            <h5>2017 - 2017</h5>
                            <p>Preparación y embalaje de los productos.
                                Supervisión de correcta posición y calidad.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="formacion" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-graduation-cap"></i> Formación acádémica</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded p-1">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/Tecnica 1.jpg" alt="tecnica 1" title="E.E.S.T.1" class="img-fluid">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Técnico Electromecánico</h3>
                            <h4>Escuela de Educación Técnica N°1 Gral. Manuel N. Savio</h4>
                            <h5>2010 - 2013</h5>
                            <p>https://www.eest1tigre.edu.ar/</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-graduation-cap"></i> Cursos de desarrollo profesional</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded p-1 mb-5">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/logoDePC.jpg" alt="DePC" title="DePC" class="img-fluid">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Programación Web Full Stack</h3>
                            <h4>DePC</h4>
                            <h5>2021 - presente</h5>
                            <p>https://depcsuite.com/</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="idiomas">
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                        <div class="row mr-sm-1 bg-white shadow me-sm-1 cuadro">
                            <div class="col-4 text-center icon-idioma">
                                <i class="fas fa-comment-alt icon"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>IDIOMAS</h2>
                                <ul>
                                    <li>ESPAÑOL - Nativo</li>
                                    <li>INGLÉS - Basic</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                        <div class="row mr-sm-1 bg-white shadow me-sm-1 cuadro">
                            <div class="col-4 text-center icon-idioma">
                                <i class="fas fa-star icon"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>HOBBIES</h2>
                                <ul>
                                    <li>Futbol</li>
                                    <li>Musica: tocar bajo y guitarra</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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