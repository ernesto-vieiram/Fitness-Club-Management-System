<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/x-icon" href="Imagenes/logo.ico">
        <link rel="stylesheet" type="text/css" href=CSS/estilos.css>
    </head>
    <body>
        <div id=inicioHead>
            <?php
            include "header.php";
            include "MenuOption.php";
            if (isset($_SESSION['usuari'])) {
                include __DIR__ . '/../controlador/carritoP.php';}
            ?>
        </div>
        <div id="contact">
          <p>Email: administration@WROFitness.com</p> </br>
          <p>Telefon number: +48 7695755478</p></br>
          <p>Location: Edwarda Wittiga</p>
        </div>

    </body>
</html>