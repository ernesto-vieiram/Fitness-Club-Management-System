<?php

include __DIR__.'/../Model/BD.php';

$ID = $_GET['Id'];

$members = getMembers($ID);

include __DIR__.'/../View/ShowList.php';
