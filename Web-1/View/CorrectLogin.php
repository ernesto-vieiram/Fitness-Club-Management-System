<!--<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/x-icon" href="Pictures/logo.ico">
        <link rel="stylesheet" type="text/css" href=CSS/estilos.css>
    </head>
    <body>
        <?php include "MenuOption.php";
        ?>
        <img id="imageLogin" class="image" src="Pictures/fondo_head2.jpg">
        <ul class="loginCorrect">

            <li> <?php
                    if (isset($_SESSION['usuari'])){
                    ?><p>Welcome <?php print_r($user['Name'])?></p>
                    <?php
                        }else{?>
                            <p>Welcome admin!</p>
                        <?php }?>

        </ul>

        <a class='returnLink' href="index.php?accio=inicio">Click to return!</button></a>
    </body>
</html>
