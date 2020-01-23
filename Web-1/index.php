<?php

session_start();

$accio = $_GET['accio'] ;
switch ($accio) {

    case 'cerrarSesion':
        include __DIR__.'/Controllers/LogOutController.php';
        break;

    case 'registre':
        //Si no existe una variable de sesion se puede registrar, pero si existe no dejaremos que se registre
        if (!isset($_SESSION['usuari'])) {
            include __DIR__ . '/Controllers/RegisterController.php';
        }else{
            include __DIR__ . '/vista/ErrorRegisterUserAlreadyLog.php';

        }
        break;

    case 'ShowCourses':
        include __DIR__. '/Controllers/CoursesController.php';
        break;

    case 'Enroll':
        include __DIR__.'/Controllers/EnrollController.php';
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
            include __DIR__ . '/View/AlreadyLogIn.php';
        }
        break;

    case 'contacto':
        include __DIR__.'/Controllers/ControllerContact.php';
        break;

    case 'AddCourse':
        include __DIR__.'/Controllers/AddCourseController.php';
        break;

    case 'addCourseSubmit':
        include __DIR__.'/Controllers/AddCourseSubmitController.php';
        break;

    case 'DeleteCourse':
        include __DIR__.'/Controllers/DeleteCourseController.php';
        break;

    case 'ShowList':
        include __DIR__.'/Controllers/ShowListController.php';
        break;

    default:
        include __DIR__.'/Controllers/HomeController.php';
        break;
}
