<?php
    include __DIR__.'/../Model/BD.php';

    $CourseName = htmlentities($_POST['courseName']);
    $CourseDay = htmlentities($_POST['courseDay']);
    $CourseHour = htmlentities($_POST['courseHour']);
    $trainerID = htmlentities($_POST['trainerID']);

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        addCourse($CourseName, $CourseDay, $CourseHour, $trainerID);

        include __DIR__.'/../Controllers/CoursesController.php';
    }
 ?>
