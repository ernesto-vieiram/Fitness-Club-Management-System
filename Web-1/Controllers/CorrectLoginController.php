<?php
    include __DIR__.'/../Model/BD.php';

    $userExist=false;
    $user=LookforUser($_REQUEST["Email"]);
    if (password_verify($_REQUEST["Password"], $user['Password'])){
            $userExist=true;
    }

    if ($userExist==true){
        switch($user['Rool']) {
            case 0:
                $_SESSION['usuari'] = [
                    'id' => $user['Id'],
                    'Name' => $user['Name'],
                    'Surname' => $user['Surname'],
                    'Password' => $user['Password'],
                    'Email' => $user['Email'],
                    'Telefon' => $user['Telefon']
                ];
                break;
            case 1:
                $_SESSION['employee'] = [
                    'id' => $user['Id'],
                    'Name' => $user['Name'],
                    'Surname' => $user['Surname'],
                    'Password' => $user['Password'],
                    'Email' => $user['Email'],
                    'Telefon' => $user['Telefon']
                ];
                break;

            case 2:
                $_SESSION['admin'] = [
                    'id' => $user['Id'],
                    'Name' => $user['Name'],
                    'Surname' => $user['Surname'],
                    'Password' => $user['Password'],
                    'Email' => $user['Email'],
                    'Telefon' => $user['Telefon']
                ];
                break;
            default:
                include __DIR__ . '/../View/IncorrectValues.php';
                break;
        }
            include __DIR__.'/../Controllers/HomeController.php';
    }
    else{
        include __DIR__ . '/../View/IncorrectValues.php';
    }

?>
