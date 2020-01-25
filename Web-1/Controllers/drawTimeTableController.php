<?php
    include_once __DIR__."/../Model/BD.php";

    function getDayTimeCourse($day, $hour){
      return getDayTimeCourse2($day, $hour);
    }

    include __DIR__."/../View/DrawTimetable.php";
 ?>
