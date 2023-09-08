<?php

require_once("C:/xampp/htdocs/login/view/head/head.php");

?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">

        <header>
            <div class="icon__menu">
                <i class="fas fa-bars" id="btn_open" onclick="abrir()"></i>
            </div>
        </header>

        <div class="menu__side veri verido" id="menu_side">

            <div class="name__page">
                <i class="fab fa-youtube"></i>
                <h4>Ututorias</h4>
            </div>

            <div class="options__menu">

                <a href="estudiante.php">
                    <div class="option">
                        <i class="fas fa-home" title="Inicio"></i>
                        <h4>Tutorias</h4>
                    </div>
                </a>

                <a href="historialEstudiante.php">
                    <div class="option">
                        <i class="far fa-file" title="Portafolio"></i>
                        <h4>Historial de Solicitudes</h4>
                    </div>
                </a>



                <a href="#" class="selected">
                    <div class="option">
                        <i class="fas fa-video" title="Notificaciones"></i>
                        <h4>Notificaciones</h4>
                    </div>
                </a>


                <a href="micuentaEstudiante.php">
                    <div class="option">
                        <i class="far fa-id-badge" title="Cuenta"></i>
                        <h4>Mi Cuenta</h4>
                    </div>
                </a>



            </div>

        </div>



        <a class="navbar-brand" href="/login/index.php">
            <img class="logoutu"
                src="https://www.utu.edu.uy/sites/www.utu.edu.uy/files/utu/recursos/LOGO-ANEP-DGETP---2021-Fondo-Transparente.png"
                alt="Logo Tutorias">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/login/index.php">Inicio</a>
                </li>
                <li class="nav-item nav-item2">
                    <a class="nav-link nav-item2" href="#">Acerca De</a>
                </li>
                <li class="nav-item nav-item2">
                    <a class="nav-link nav-item2" href="#">Contacto</a>
                </li>
                <li class="nav-item nav-item2">
                    <a class="nav-link" href="#">Tutorias</a>
                </li>

                <li class="nav-item nav-item2">
                    <a class="nav-link" href="#">Cerrar Sesion</a>
                </li>

            </ul>
        </div>


    </div>
</nav>

<br>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h4>Notificaciones</h4>
        </div>

        <div class="col-12 card text-bg-primary mb-3">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Primary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
            </div>





        </div>
    </div>


    <div class="col-12 card text-bg-danger mb-3">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
        </div>



        <?php

        require_once("C:/xampp/htdocs/login/view/head/footer.php");

        ?>