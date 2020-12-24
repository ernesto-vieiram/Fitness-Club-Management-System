<?php

$host = 'localhost';
$db_name = 'Gym';
$user = 'root';
$pswd = '';

//Connexion to DB and test if the connection is successful
$db = mysqli_connect($host,$user,$pswd,$db_name);

if(mysqli_connect_errno()){
    echo "Impossible connection with DB";
    //exit();
}

//function that encrypt the password for the DB
function encriptPsswd($sin_psswd){
    return password_hash($sin_psswd, PASSWORD_DEFAULT);
}


//Function to add a user in the DB
function RegisterUser($Name, $Surname, $email, $password, $number, $Role)
{

    global $db;
    $password = encriptPsswd($password);

    $consulta = $db->query("SELECT * FROM users WHERE Email='$email'");
    if( $consulta->num_rows == 0) {
        try {

            $stmt = "INSERT INTO users (Name,Surname,Email,Password,Telefon, Rool)
                              VALUES ('$Name','$Surname','$email','$password','$number', 0)";
            mysqli_query($db, $stmt);

        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        return 1;
    }
    else{
        return 0;
    }

}

//Function to add a Course in the DB
function addCourse($courseName, $courseDay, $courseHour, $trainerID){
  global $db;

  try {
    $stmt = "INSERT INTO COURSES (CourseName, CourseDay, CourseHour, TrainerID)
     VALUES ('$courseName', '$courseDay', '$courseHour', '$trainerID')";
     mysqli_query($db, $stmt);
  }catch(PDOException $ex){
      echo $ex->getMessage();
  }
}

//Function to delete a Course in the DB
function removeCourse($ID){
    global $db;

    $stmt = "DELETE FROM MembersCourses WHERE CourseID = '$ID'";
    mysqli_query($db, $stmt);
    $stmt = "DELETE FROM COURSES WHERE CourseID = '$ID'";
    mysqli_query($db, $stmt);


}

//Function check if the user exists
function LookforUser($email)
{
    global $db;
    $stmt= $db->query("SELECT *  FROM users  WHERE Email='$email'");

    $user=$stmt->fetch_assoc();
    return $user;
}

//Function return all the courses in the DB
function getCourses(){
    global $db;
    $sql = $db->query("SELECT * FROM COURSES");
    return $sql;
}

//This function add a user in a course
function enrollCourse($Id,$name,$IdMem){

    global $db;

    $consulta = $db->query("SELECT * FROM MembersCourses WHERE MemberID = '$IdMem' AND CourseID = '$Id'");

    if( $consulta->num_rows == 0) {

        try {
            $stmt = "INSERT INTO memberscourses (MemberID, CourseID, MemberName)
                          VALUES ('$IdMem','$Id','$name')";
            mysqli_query($db, $stmt);

        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
}


function getEnrolledCourses($userID){
  global $db;
  $sql = $db->query("SELECT * FROM MembersCourses WHERE MemberID = '$userID'");
  return $sql;
}

function getDayTimeCourse2($day, $hour){
  global $db;
    $sql = $db->query("SELECT * FROM COURSES WHERE CourseDay = '$day' AND CourseHour = '$hour'");
    return $sql->fetch_row()[1];

}

function getMembers($Id){
    global $db;

    $stmt= $db->query("SELECT *  FROM MembersCourses  WHERE CourseID = '$Id'");
    $members=$stmt->fetch_all();
    return $members;
}


function userLookup($Name, $Surname, $Email, $Role){
  global $db;
  $i = 0;
  $query = "SELECT Id, Name, Surname, Email, Rool FROM users WHERE ";

  if("$Name" != ""){
    //Name introduced
    $query .= "Name = '$Name'";
    $i += 1;
  }
  if("$Surname" != ""){
    //Surname introduced
    if($i > 0){$query .= " AND ";}
    $query .= "Surname = '$Surname'";
    $i += 1;
    }

  if("$Email" != ""){
    //Email introduced
    if($i > 0){$query .= " AND ";}
    $query .= "Email = '$Email'";
    $i++;
  }

  if("$Role" != ""){
    //Role introduced
    if($i > 0){$query .= " AND ";}
    $query .= "Rool = $Role";
    $i += 1;
  }
  if($i == 0){
    return [];
  }

  $stmt= $db->query($query);
  if(!$stmt){return $db->error . $query;}
  return $stmt->fetch_all();
}

//Erase a user to the DB
  function removeUser($Id){
    global $db;

    $stmt = "DELETE FROM MembersCourses WHERE MemberID = '$Id'";
    mysqli_query($db, $stmt);
    $stmt = "DELETE FROM users WHERE Id = '$Id'";
    mysqli_query($db, $stmt);
  }
