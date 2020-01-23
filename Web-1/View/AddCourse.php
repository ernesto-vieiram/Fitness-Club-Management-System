<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../CSS/estilos.css">
  </head>
  <body>

    <form method="post" action="index.php?accio=addCourseSubmit" id="formAddCourse">
      <class id="registre">
        <h2> Add Course Information:</h2> </br>
          <div id="courseDataForm">
            <br>
              <label id="courseDataForm" for="courseName">Course Name: </label>
              <input type="text" name="courseName" class="inputStyle" id="Name"></input></br>
              <br>
              <br>
              <label id="courseDataForm" for="courseDay">Course Day: </label>
              <input type="text" name="courseDay"  class="inputStyle" id="courseDay"></input></br>
              <br>
              <br>
              <label id="courseDataForm" for="courseHour">Course Hour: </label>
              <input type="text" name="courseHour" class="inputStyle" id="courseHour"></input></br>
              <br>
              <br>
              <label id="courseDataForm" for="trainerID">Trainer ID: </label>
              <input type="number" id="trainerID" class="inputStyle" name="trainerID"></input></br>
            </br></br>
          </div>
          <input type="submit" id="but" value="Add Course"></input>
        </class>

  </body>
</html>
