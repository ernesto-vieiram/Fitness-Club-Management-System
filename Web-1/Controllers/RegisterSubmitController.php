<?php

include __DIR__.'/../Model/BD.php';


//con esto filtramos los datos para evitar ataques xss


$Name = htmlentities($_POST['Name']);
$email = htmlentities($_POST['email']);
$Surname = htmlentities($_POST['Surname']);
$password = htmlentities($_POST['password']);
$number = htmlentities($_POST['number']);

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    if (filter_var($email, FILTER_VALIDATE_EMAIL) ) {
        $usuari=registrarUsuari($Name,$Surname, $email,$password,$number);

        include __DIR__.'/../View/Registered.php';

    } else {
        include __DIR__.'/../View/IncorrectValues.php';

    }
}
