<?php

session_start();

$accio = $_GET['accio'] ;
switch ($accio) {

    case 'cerrarSesion':
        include __DIR__.'/Controller/cerrarSesion.php';
        break;

    case 'registre':
        //Si no existe una variable de sesion se puede registrar, pero si existe no dejaremos que se registre
        if (!isset($_SESSION['usuari'])) {
            include __DIR__ . '/Controllers/RegisterController.php';
        }else{
            include __DIR__ . '/vista/ErrorRegisterUserAlreadyLog.php';

        }
        break;

    case 'MiCuenta':
        if (isset($_SESSION['usuari'])) {
            include __DIR__ . '/controlador/muestraDatos.php';
        }else{
            include __DIR__ . '/vista/ErrorRegisterUserAlreadyLog.php';

        }
        break;

    case 'registerSubmit':
        if (!isset($_SESSION['usuari'])) {
            include __DIR__ . '/Controllers/RegisterSubmitController.php';
        }else{
            include __DIR__ . '/vista/ErrorRegisterUserAlreadyLog.php';
        }
        break;

    case 'login':
        if (!isset($_SESSION['usuari'])) {
            include __DIR__ . '/Controllers/LoginController.php';
        }else{
            include __DIR__ . '/vista/ErrorRegisterUserAlreadyLog.php';
        }
        break;

    case 'inicio':
        include __DIR__.'/Controllers/HomeController.php';
        break;

    case 'loginCorrecto':
        if (!isset($_SESSION['usuari'])) {
            include __DIR__ . '/Controllers/CorrectLoginController.php';
        }else{
            include __DIR__ . '/vista/ErrorRegisterUserAlreadyLog.php';
        }
        break;

    case 'contacto':
        include __DIR__.'/Controllers/ControllerContact.php';
        break;

    default:
        include __DIR__ . '/Controllers/HomeController.php';
        break;
}
