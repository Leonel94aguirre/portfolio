<header class="container">
    <nav class="navbar navbar-expand-md mb-4">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mt-2">
                    <li class="nav-item px-3 ps-2">
                        <a class="nav-link px-4 py-1 <?php echo ($pg == "inicio") ? "active" : "" ?>" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item px-3 ps-2">
                        <a class="nav-link px-4 py-1 <?php echo ($pg == "sobre-mi") ? "active" : "" ?>" href="sobre-mi.php">Sobre mi</a>
                    </li>
                    <li class="nav-item px-3 ps-2">
                        <a class="nav-link px-4 py-1 <?php echo ($pg == "proyectos") ? "active" : "" ?>" href="proyectos.php">Proyectos</a>
                    </li>
                    <li class="nav-item px-3 ps-2">
                        <a class="nav-link px-4 py-1 <?php echo ($pg == "contacto") ? "active" : "" ?>" href="contacto.php">Contacto</a>
                    </li>
                </ul>
                <div class="d-inline">
                    <a href="" class="btn btn-rojo">Descargar mi CV <i class="fas fa-download"></i></a>
                </div>
            </div>
        </div>
    </nav>
</header>