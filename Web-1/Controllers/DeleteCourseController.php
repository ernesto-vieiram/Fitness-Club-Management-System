<?php

include __DIR__.'/../Model/BD.php';

$ID = $_GET['Id'];

$Remove = RemoveCourse($ID);

include __DIR__. '/../View/Home.php';
