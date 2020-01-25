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
    ?>

</div>
<h1>Enrollment List:</h1>
<table style="table-layout:fixed">
  <?php
      foreach($members as $member){
        echo "<tr>";
        echo "<td width=50px align='left'>$member[2]</td>";
      }
   ?>

</table>
