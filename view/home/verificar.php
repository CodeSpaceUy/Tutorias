<?php
require_once("C:/xampp/htdocs/login/view/head/head.php");

if (isset($_POST["ci"]) && isset($_POST["password"])) {
    $txtUsuario = $_POST["ci"];
    $txtPassword = $_POST["password"];

    $id_cargo = usuarioDao::login($txtUsuario, $txtPassword);

    if ($id_cargo !== false) {
        // Las credenciales son correctas, redirige según el id_cargo
        if ($id_cargo == 1) {
            // Redirigir para usuario con id_cargo 1
            header("Location: pagina_usuario1.php");
            exit;
        } elseif ($id_cargo == 2) {
            // Redirigir para usuario con id_cargo 2
            header("Location: pagina_usuario2.php");
            exit;
        }
    }
}

echo "No logueado";



?>
