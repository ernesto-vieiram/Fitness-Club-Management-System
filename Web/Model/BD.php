<?php

$host = 'localhost';
$db_name = 'Gym';
$user = 'root';
$pswd = '';

$db = mysqli_connect($host,$user,$pswd,$db_name);

if(mysqli_connect_errno()){
    echo "Impossible connection with DB";
    //exit();
}


function encriptPsswd($sin_psswd){
    return password_hash($sin_psswd, PASSWORD_DEFAULT);
}

function registrarUsuari($Name,$Surname,$email,$password,$number)
{
    global $db;
    $password = encriptPsswd($password);



    try {
        $stmt = "INSERT INTO users (Name, Surname, Email, Password, Telefon, Rool)
                          VALUES ('$Name', '$Surname', '$email', '$password', '$number', 2)";
        mysqli_query($db, $stmt);

        $consulta = "SELECT * FROM users";
        $resultados = mysqli_query($db, $consulta);
        while($fila = mysqli_fetch_row($resultados)){
          echo $fila[0] . "<br>";
        }

      }catch(PDOException $ex){
        echo $ex->getMessage();
    }

}

function LookforUser($email)
{
    global $db;
    $stmt= $db->query("SELECT *  FROM Users  WHERE Email='$email'");
    $user=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $user;
}
