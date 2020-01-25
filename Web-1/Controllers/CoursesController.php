<?php

include __DIR__.'/../Model/BD.php';


$courses = getCourses();

include __DIR__.'/../View/Courses.php';