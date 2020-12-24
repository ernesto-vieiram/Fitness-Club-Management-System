<?php

include __DIR__.'/../Model/BD.php';

$ID = $_GET['Id'];
$name = $_SESSION['usuari']['Name'];
$IdMember = $_SESSION['usuari']['id'];

echo $name;

$Inscription = enrollCourse($ID,$name,$IdMember);

include __DIR__. '/../View/Home.php';