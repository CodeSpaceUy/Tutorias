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

        <a href="#" class="selected">
          <div class="option">
            <i class="fas fa-home" title="Inicio"></i>
            <h4>Tutorias</h4>
          </div>
        </a>

        <a href="historialProfesor.php">
          <div class="option">
            <i class="far fa-file" title="Portafolio"></i>
            <h4>Historial de Solicitudes</h4>
          </div>
        </a>

        <a href="notificaciones.php">
          <div class="option">
            <i class="fas fa-video" title="Cursos"></i>
            <h4>Notificaciones</h4>
          </div>
        </a>

        <a href="micuenta.php">
          <div class="option">
            <i class="far fa-sticky-note" title="Blog"></i>
            <h4>Mi cuenta</h4>
          </div>
        </a>

        <a href="#">
          <div class="option">
            <i class="far fa-id-badge" title="Contacto"></i>
            <h4>Mi Institucion</h4>
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
    <div class="col-12 ">
      <h4>Tutorias Asignadas</h4>
    </div>


    <div class="col-12">
      <div class="card">
        <h5 class="card-header">Proximas Tutorias</h5>
        <div class="card-body">


          <table class="table">
            <thead>
              <tr>
                <th scope="col">Asunto</th>
                <th scope="col">Curso</th>
                <th scope="col">Dia Inicio-Fin</th>
                <th scope="col">Hora</th>
                <th scope="col">Periodo</th>
                <th scope="col">Materiales</th>
                <th scope="col">Asistencia</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
              <tr>
                <th scope="row">Matematica 1</th>
                <td>Matematica</td>
                <td>2023-08-07 / 2023-08-11</td>
                <td>9:15-9:55</td>
                <td>Julio</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Material">Ver Material</button></td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Faltas">Pasar</button></td>
              </tr>
              <tr>
                <th scope="row">Programacion 1</th>
                <td>Programacion</td>
                <td>2023-06-27 / 2023-06-27</td>
                <td>9:15-9:55</td>
                <td>Febrero</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Material">Ver Material</button></td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Faltas">Pasar</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

 <!--Modal para Subir Materiales-->
    <div class="modal fade" id="Material" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Subir Materiales</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="col-md-12">
              <label for="validationCustom01" class="form-label">Adjunte un archivo</label>
              <input type="file" class="form-control" id="validationCustom01" value="Mark" required>
              <div class="valid-feedback">
                Looks good!
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Faltas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    <!-- <div class="col-7 ">
      <div class="card">
        <h5 class="card-header">Proximas Tutorias</h5>
        <div class="card-body">


          <table class="table">
            <thead>
              <tr>
                <th scope="col">Asunto</th>
                <th scope="col">Asignatura</th>
                <th scope="col">Dia</th>
                <th scope="col">Hora</th>
                <th scope="col">Modalidad</th>
                <th scope="col">Unirme</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
              <tr>
                <th scope="row">Matematica 1</th>
                <td>Matematica</td>
                <td>2023-06-24</td>
                <td>9:15-9:55</td>
                <td>Presencial</td>
                <td><a class="btn btn-primary" href="#" role="button">Unirme</a>
                </td>
              </tr>
              <tr>
                <th scope="row">Programacion 1</th>
                <td>Programacion</td>
                <td>2023-06-27</td>
                <td>9:15-9:55</td>
                <td>Presencial</td>
                <td><a class="btn btn-primary" href="#" role="button">Unirme</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>



  </div>
</div> -->




<?php

require_once("C:/xampp/htdocs/login/view/head/footer.php");

?>