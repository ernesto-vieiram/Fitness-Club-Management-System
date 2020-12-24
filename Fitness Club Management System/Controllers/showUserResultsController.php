<?php
    include __DIR__."/../Model/BD.php";

    $Name = $_POST["Name"];
    $Surname = $_POST["Surname"];
    $Email = $_POST["email"];
    $Role = $_POST["role"];

    $users = userLookup($Name, $Surname, $Email, $Role);

    include __DIR__."/../View/manageUsers.php";
    include __DIR__."/../View/showUserLookup.php";
 ?>
