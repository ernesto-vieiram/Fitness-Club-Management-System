<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href=../CSS/tableStyle.css>
    <style media="screen">
      table, th, td, tr {
        border-bottom: 1px solid black;
          }
    </style>
  </head>
  <body>

    <h1>Courses Schedule.</h1>
    <table>
      <?php
      include __DIR__.'/../Model/BD.php';

      echo "<colgroup> <col span='1' width=60px></colgroup>";
      echo "<colgroup> <col span='7' width=100px></colgroup>";

      $days = ["MONDAY", "TUESDAY", "WEDNESDAY", "THURSDAY", "FRIDAY", "SATURDAY", "SUNDAY"];
      echo "<tr>";
      echo "<th rowspan='1'>HOUR</th>";
      foreach($days as $day){
        echo "<th rowspan='1'>$day</th>";
      }
      echo "</tr>";


      for($i=8; $i<22; $i++){
          $hour = "$i:00";
          echo "<tr>";
          echo "<th>$hour</th>";
          foreach ($days as $day){
              $course = getDayTimeCourse($day, $hour);
              if($course){
                echo "<td colspan='0' rowspan='1' class='courseItem'>
                      $course</td>";
              }else{
              echo "<td colspan='0' rowspan='1' class='emptyItem'></td>";
            }
          }
          echo "</tr>";
      }
       ?>
    </table>


  </body>
</html>
