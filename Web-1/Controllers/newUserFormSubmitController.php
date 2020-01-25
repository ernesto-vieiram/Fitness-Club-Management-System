<?php
    include __DIR__."/../Model/BD.php";

    $Name = $_POST["Name"];
    $Surname = $_POST["Surname"];
    $Password = $_POST["Password"];
    $Email = $_POST["Email"];
    $Role = $_POST["Role"];
    $Phone = $_POST["Phone"];

    registrarUsuari($Name, $Surname, $Email, $Password, $Phone, $Role);

    include __DIR__."/../Controllers/manageUsersController.php"
 ?>
