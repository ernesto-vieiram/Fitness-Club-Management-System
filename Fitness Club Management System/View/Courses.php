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

<div style="align-content:center;">
    <table id="comandas" style='table-layout: fixed;'>
    <?php
    foreach ($courses as $l):

        echo "<tr>"?>
        <td style='width: 50px; text-align: center;'> <?php echo $l['CourseID'];?></td>
        <td style='width: 200px;'> <?php echo $l['CourseName'];?></td>
        <td style='width: 200px;'> <?php echo $l['CourseDay'];?></td>
        <td style='text-align: right;'> <?php echo $l['CourseHour'];?></td>
        <?php if(isset($_SESSION['usuari'])){?>
        <td><a href="index.php?accio=Enroll&Id=<?php echo $l['CourseID'];?>">Enroll</a></td>
        <?php }?>
        <?php if(isset($_SESSION['admin'])){?>
            <td>&nbsp &nbsp<a href="index.php?accio=DeleteCourse&Id=<?php echo $l['CourseID'];?>">Delete</a>&nbsp</td>
            <td>&nbsp<a href="index.php?accio=ShowList&Id=<?php echo $l['CourseID'];?>">Show Participants</a></td>
        <?php }?>
        <?php if(isset($_SESSION['employee'])){?>
            <td><a href="index.php?accio=ShowList&Id=<?php echo $l['CourseID'];?>">  Show Participants</a></td>
    <?php }?>

        <?php echo"</tr>";

     endforeach;?>
     <td colspan="5" style="text-align: center"><a href="index.php?accio=AddCourse"> Add Course</a></td>
    </table>
</div>
</body>
