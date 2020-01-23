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
    <form method="post" action="index.php?accio=registerSubmit">
      <class id="registre">
        <h2> Create your account</h2> </br>
          <div id="registreCamps">
              <label id="registre" for="Name">Name: </label>
              <input type="text" name="Name" id="Name"></input></br>
              <label id="registre" for="Surname">Surname: </label>
              <input type="text" name="Surname" id="Surname"></input></br>
              <label id="registre" for="email">Email: </label>
              <input type="email" name="email" id="email"></input></br>
              <label id="registre" for="password">Password: </label>
              <input type="password" id="password" name="password"></input></br>
              <label id="registre" for="number">Telefon number:</label>
              <input type="number" step="1" id="number" name="number" maxlength="9"></input></br>
            </br></br>
          </div>
          <input type="submit" id="but" value="Sign up"></input>
        </class>

      </form>
  </body>
</html>
