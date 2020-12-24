<html>
    <head>
        <meta charset="UTF-8">
        <title>Log in</title>
        <link rel="icon" type="image/x-icon" href="Pictures/logo.ico">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link rel="apple-touch-icon" sizes="57x57" href="../Pictures/favicon/apple-touch-icon-57x57.png" data-mce-href="img/favicon/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="../Pictures/favicon/apple-touch-icon-60x60.png" data-mce-href="img/favicon/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../Pictures/favicon/apple-touch-icon-72x72.png" data-mce-href="img/favicon/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="../Pictures/favicon/apple-touch-icon-76x76.png" data-mce-href="img/favicon/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../Pictures/favicon/apple-touch-icon-114x114.png" data-mce-href="img/favicon/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="../Pictures/favicon/apple-touch-icon-120x120.png" data-mce-href="img/favicon/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="../Pictures/favicon/apple-touch-icon-144x144.png" data-mce-href="img/favicon/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="../Pictures/favicon/apple-touch-icon-152x152.png" data-mce-href="img/favicon/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../Pictures/favicon/apple-touch-icon-180x180.png" data-mce-href="img/favicon/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="../Pictures/favicon/favicon-32x32.png" sizes="32x32" data-mce-href="img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" href="../iPictures/favicon/android-chrome-192x192.png" sizes="192x192" data-mce-href="img/favicon/android-chrome-192x192.png">
        <link rel="icon" type="image/png" href="../Pictures/favicon/favicon-96x96.png" sizes="96x96" data-mce-href="img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" href="../Pictures/favicon/favicon-16x16.png" sizes="16x16" data-mce-href="img/favicon/favicon-16x16.png">
        <link rel="icon" type="image/x-icon" href="Pictures/logo.ico">
        <link rel="stylesheet" href="iconos/font-awesome/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Contrail+One&display=swap" rel="stylesheet">

    </head>

    <header>
        <?php include "MenuOption.php";
        ?>
    </header>
    <body style="background-image: url('../Pictures/fondo_head.jpg'); background-repeat: no-repeat;background-position: center;background-size: 100% 75%;">
        <form class = 'box' method="post" action="index.php?accio=loginCorrecto">
            <h1 class = 'log'>Login</h1>
            <input type="email" name ="Email" placeholder="Email" class='txtb'>
            <input type="password" name ="Password" placeholder="Password" class='txtb'>
            <input type="submit" name = '' value="Login">
        </form>
    </body>
</html>
