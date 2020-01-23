<html>
    <head>

        <meta charset="UTF-8">
        <title>Phone Case</title>
        <link rel="icon" type="image/x-icon" href="Pictures/logo.ico">
        <link rel="stylesheet" type="text/css" href=CSS/register.css>

    </head>

    <header>
        <?php include "MenuOption.php";
        ?>
    </header>
    <body>
        <form method="post" action="index.php?accio=loginCorrecto">
            <h2> Log in</h2>
            <div id="loginCamps">
                <label id="registre" for="email">E-mail:</label>
                <input type="email" name="email" id="email"></br>
                <label id="registre" for="password">Password:</label>
                <input type="password" id="password" name="password"></br></br>
            </div>
            <input type="submit" id="buttonS" value="Log In">
        </form>
    </body>
</html>