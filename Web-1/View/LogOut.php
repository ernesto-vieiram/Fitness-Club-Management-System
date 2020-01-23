<?php
    session_destroy();
    include "MenuOption.php";
    header("location:index.php?=inicio");
?>
<html>
    <body>
        <ul class="loginCorrect">
            <li> <p>Session finished.</p>

        </ul>

        <a href="index.php?=inicio" onclick='""'>Home!</button></a>

    </body>
</html>
