<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="Imagenes/logo.ico">
    <link rel="stylesheet" type="text/css" href=CSS/estilos.css>
</head>

<body>
<div id=inicioHead>
    <?php
    /*include __DIR__."/../Controller/CoursesController.php";*/
    include "header.php";
    include "MenuOption.php";
    ?>

</div>

<div style="align-content:center;">
    <table id="comandas">
    <?php
    foreach ($courses as $l):

        echo "<tr>"?>
        <td> <?php echo $l['CourseName'];?></td>
        <td> <?php echo $l['CourseDay'];?></td>
        <td> <?php echo $l['CourseHour'];?></td>
        <?php if(isset($_SESSION['usuari'])){?>
        <td><a href="index.php?accio=Enroll&Id=<?php echo $l['CourseID'];?>">Enroll</a></td>
        <?php }?>
        <?php if(isset($_SESSION['admin'])){?>
            <td><a href="index.php?accio=DeleteCourse&Id=<?php echo $l['CourseID'];?>">Delete</a></td>
            <<td><a href="index.php?accio=ShowList&Id=<?php echo $l['CourseID'];?>">Show Participants</a></td>
        <?php }?>
        <?php if(isset($_SESSION['employee'])){?>
            <<td><a href="index.php?accio=ShowList&Id=<?php echo $l['CourseID'];?>">Show Participants</a></td>
    <?php }?>

        <?php echo"</tr>";

     endforeach;?>
    </table>

    <a href="index.php?accio=AddCourse"> Add Course</a>
    </table>
</div>
</body>
