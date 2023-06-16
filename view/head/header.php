
<?php

require_once("C:/xampp/htdocs/login/view/head/head.php");

?>



<nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
         
          <a class="navbar-brand" href="/login/index.php">
            <img class="logoutu"
              src="https://www.utu.edu.uy/sites/www.utu.edu.uy/files/utu/recursos/LOGO-ANEP-DGETP---2021-Fondo-Transparente.png"
              alt="Logo Tutorias">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
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

          </ul>
        </div>

        
      </div>
    </nav>


    <div class="fondo">
<?php if(empty($_SESSION['usuario'])): ?>
    



    

    <div class="position-relative">
          <img src="../../login/asset/img/fondo.jpg" class="img-fluid" alt="...">

      <div class="position-absolute subir start-0 text-center">
          <h1>Regístrese para tutorías</h1>
           <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi distinctio corrupti alias accusamus aliquid sint recusandae eligendi laboriosam? Vero porro nesciunt alias non quisquam quis, recusandae expedita in. Quam, quasi.
       </p>


    <div class="botones">
      <a href="/login/view/home/singup.php"><button type="button" class="btn btn-primary">REGISTRATE</button></a>
      <a href="/login/view/home/login.php"><button type="button" class="btn btn-primary">INICIAR SESION</button></a>

    </div>

    
  </div>
    
  </div>

  <?php else: ?>

    <h1 class="text-center mt-4">Bienvenido Usuario <?= $_SESSION["usuario"] ?></h1>
    <a href="/login/view/home/logout.php" class="boton">Cerrar Session</a>
    <?php endif ?>
