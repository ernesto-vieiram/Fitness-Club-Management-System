<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Wroclaw Fitness</title>
    <link rel="stylesheet" type="text/css" href=CSS/estilos.css>

  </head>
  <body>
    <?php
    include "header.php";
    include "MenuOption.php"; ?>

  <form method="post" action="index.php?accio=addCourseSubmit" style="text-align: center;">
    <class id="registre">
      <h2> Add Course Information:</h2> </br>
        <div id="courseDataForm">
            <label id="courseDataForm" for="courseName">Course Name: </label>
            <input type="text" name="courseName" id="Name"></input></br>

            <label id="courseDataForm" for="courseDay">Course Day: </label>
            <select class="" name="courseDay">
              <option value="MONDAY">Monday</option>
              <option value="TUESDAY">Tuesday</option>
              <option value="WEDNESDAY">Wednesday</option>
              <option value="THURSDAY">Thursday</option>
              <option value="FRIDAY">Friday</option>
              <option value="SATURDAY">Saturday</option>
              <option value="SUNDAY">Sunday</option>
            </select></br>

            <label id="courseDataForm" for="courseHour">Course Hour: </label>
            <select class="" name="courseHour">
              <?php
              for($i=8;$i<22;$i++){
                $hour = "$i:00";
                echo "<option value=$hour>$hour</option>";
              } ?>

            </select></br>

            <label id="courseDataForm" for="trainerID">Tainer ID: </label>
            <input type="number" id="trainerID" name="trainerID"></input></br>
          </br></br>
        </div>
        <input type="submit" id="but" value="Add Course"></input>
      </class>

  </body>
</html>
