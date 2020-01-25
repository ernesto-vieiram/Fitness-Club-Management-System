
<html>
    <head>
        <meta charset="UTF-8">
       	<link rel="icon" type="image/x-icon" href="Pictures/logo.ico">
    	<link rel="stylesheet" href="iconos/font-awesome/css/font-awesome.min.css">
    	<link href="https://fonts.googleapis.com/css?family=Contrail+One&display=swap" rel="stylesheet">
    	<link rel="stylesheet" href="../CSS/estilos.css">
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
    </head>

    <body>
    	<div class= "content">
    		<h1 class="gymTitle">Wroclaw Fitness</h1>
    		<h2 class="gymDescription">“If you can’t outplay them, outwork them.”</h2>
       		<?php
        		include "MenuOption.php";
        		if (isset($_SESSION['usuari'])) {
            	echo $_SESSION['usuari']['Name'];
       		 }?>
    	</div>
    </body>
</html>
