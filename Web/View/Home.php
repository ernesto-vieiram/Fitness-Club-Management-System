
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/x-icon" href="Pictures/logo.ico">
        <link rel="stylesheet" type="text/css" href=CSS/estilos.css>
    </head>

    <header>
       /**<?php
        include "header.php";
        include "MenuOption.php";
        if (isset($_SESSION['usuari'])) {
            include __DIR__ . '/../controlador/carritoP.php';
        }?>
    </header>
    <body>
        <div id=inicioHead>

            <div class="ima">
                <img class="image_fondo" src="Pictures/fondo_head.PNG">
                <img class="image_fondo2" src="Pictures/fondo_head2.PNG">
            </div>
        </div>
    </body>
</html>
