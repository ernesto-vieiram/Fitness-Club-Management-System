<!--<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/x-icon" href="Pictures/logo.ico">
        <link rel="stylesheet" type="text/css" href=CSS/estilos.css>
    </head>
    <body>
        <?php include "MenuOption.php";
        ?>
        <img class="image" src="Pictures/Captura.PNG">
        <ul class="loginCorrect">

            <li> <?php
                    if (isset($_SESSION['usuari'])){
                    ?><p>Welcome <?php print_r($user['Name'])?></p>
                    <?php
                        }else{?>
                            <p>Benvingut admin</p>
                        <?php }?>

        </ul>

        <a href="index.php?accio=inicio">click para volver!</button></a>
    </body>
</html>