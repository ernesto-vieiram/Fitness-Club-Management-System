<?php

include_once __DIR__.'/../Model/BD.php';


$courses = getCourses();

include __DIR__.'/../View/Courses.php';
