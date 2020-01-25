<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Wroclaw Fitness</title>

  </head>
  <body>

    <form method="post" action="index.php?accio=addCourseSubmit">
      <class id="registre">
        <h2> Add Course Information:</h2> </br>
          <div id="courseDataForm">
              <label id="courseDataForm" for="courseName">Course Name: </label>
              <input type="text" name='courseName' id="Name"></input></br>

              <label id="courseDataForm" for="courseDay">Course Day: </label>
              <input type="text" name='courseDay' id="courseDay"></input></br>

              <label id="courseDataForm" for="courseHour">Course Hour: </label>
              <input type="text" name='courseHour' id="courseHour"></input></br>

              <label id="courseDataForm" for="trainerID">Trainer ID: </label>
              <input type="number" id="trainerID" name='trainerID'></input></br>
            </br></br>
          </div>
          <input type="submit" id="but" value="Add Course"></input>
        </class>

  </body>
</html>
