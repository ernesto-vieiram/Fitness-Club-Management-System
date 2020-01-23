<?php
    include __DIR__.'/../Model/BD.php';

    $userExist=false;
    $user=LookforUser($_REQUEST['email']);
    foreach ($user as $us):
        if (password_verify($_REQUEST['password'], $us['contraseña'])){
            $userExist=true;
        }
    endforeach;

    $admin = buscaUsuariAdmin($_REQUEST['email']);

    if ($userExist==true){
        foreach ($user as $us):
            $_SESSION['usuari'] = [
                'id' => $us['Id'],
                'Name' => $us['nom'],
                'Surname' => $us['Surname'],
                'Password' => $us['Password'],
                'Email' => $us['email'],
                'Telefon' => $us['Number']
            ];
        endforeach;
        include _DIR_.'/../vista/loginCorrecto.php';

    }else{
        if ($admin) {
            if (password_verify('aprovamos', '$2y$10$yxt3IG02uE8bANXoxNVCzupNgSJOCwsUnOKEz3I6q49PeqpYVrXfe')) {
                foreach ($admin as $us):
                    $_SESSION['admin'] = [
                        'id' => $us['id'],
                        'password' => $us['password'],
                        'email' => $us['email']
                    ];
                endforeach;
                $_SESSION['admin'] = 'true';
                include _DIR_ . '/../vista/loginCorrecto.php';

            }
        }else{
            include _DIR_.'/../vista/noDisponible.php';
        }
    }
?>