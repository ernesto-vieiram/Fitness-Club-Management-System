<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone case</title>
    <!--<link rel="icon" type="image/x-icon" href="Imagenes/logo.ico">-->
    <meta name="description" content="fundas para movil" /> <!--lo que la gente buscara en el buscador-->
  </head>
  <body>
    <section class="Struct">
      <header>
        <link rel="stylesheet" type="text/css" href=CSS/estilos.css>
        </br>
        <div id="container">

          <div id="header">
              <ul class="nav">
                  <li><a href="index.php?accio=inicio">Home</a></li>

                  <li><a href="index.php?accio=ShowCourses">Courses</a>
                  </li>
                  <li><a href="index.php?accio=MiCuenta">My account</a>
                      <ul>
                          <?php if (!isset($_SESSION['usuari']) and !isset($_SESSION['admin'])){?>
                              <li> <a href="index.php?accio=login">Log in</a></li>
                              <li><a href="index.php?accio=registre">Sign up</a></li>
                              <?php
                          }else{
                              ?> <li><a href="index.php?accio=cerrarSesion">Cerrar sesion</a></li><?php
                          }?>

                      </ul>
                  </li>
                  <li><a href="index.php?accio=contacto">Contact</a></li>
                  <?php
                  if (isset($_SESSION['admin'])) {?>
                      <li><a> Hello! ADMIN </a></li>
                    <?php }
                  if (isset($_SESSION['usuari'])) {?>
                      <li><a> Hello! $_SESSION["Name"] </a></li>
                    <?php }?>
              </ul>
          </div>
        </div>
      </header>
    </section>

    </br></br>
    <!--
      <section class="button">
        <input type="submit" value="BUSCAR"> </input>
      </section>-->
  </body>

</html>
