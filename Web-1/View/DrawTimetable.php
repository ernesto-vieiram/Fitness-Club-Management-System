<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <style media="screen">
      table, th, td, tr {
        table-layout: fixed;
        border-bottom: 1px solid black;
          }
    </style>
    <link rel="stylesheet" type="text/css" href=../CSS/tableStyle.css>
  </head>
  <body>
    <?php
    include "header.php";
    include "MenuOption.php"; ?>


    <h1>Courses Schedule.</h1>
    <table style="table-layout: fixed">
      <?php

      echo "<colgroup> <col span='1' width=60px></colgroup>";
      echo "<colgroup> <col span='7' width=100px></colgroup>";

      $days = ["MONDAY", "TUESDAY", "WEDNESDAY", "THURSDAY", "FRIDAY", "SATURDAY", "SUNDAY"];
      echo "<tr>";
      echo "<th rowspan='1'>HOUR</th>";
      foreach($days as $day){
        echo "<th rowspan='1' width='30px'>$day</th>";
      }
      echo "</tr>";


      for($i=8; $i<22; $i++){
          $hour = "$i:00";
          echo "<tr>";
          echo "<th>$hour</th>";
          foreach ($days as $day){
              $course = getDayTimeCourse($day, $hour);
              if($course){
                echo "<td colspan='0' rowspan='1' class='courseItem' width='10px'>
                      $course</td>";
              }else{
              echo "<td colspan='0' rowspan='1' class='emptyItem' width='10px'></td>";
            }
          }
          echo "</tr>";
      }
       ?>
    </table>


  </body>
</html>
