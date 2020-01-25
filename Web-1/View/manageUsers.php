<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ManageUsers</title>
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
    <link rel="stylesheet" href="/../CSS/estilos.css">
  </head>

  <header>
      <?php
      include "MenuOption.php";
      include "header.php";
      ?>
  </header>

  <body>
      <table>
        <tr>
          <form class='box' action="index.php?accio=userLookup" method="post">
            <td><input type="text" name='Name' placeholder="Name" size="14" style="font-size: 14px" class="txtb" > &nbsp</td>
            <td><input type="text" name='Surname' placeholder="Surname" size="20" style="font-size: 14px" class="txtb"> &nbsp</td>
            <td><input type="email" name='email' placeholder="Email" size="20" style="font-size: 14px" class="txtb"> &nbsp</td>
            <td><input type="text" name='role' placeholder="Role" size="10" style="font-size: 14px" class="txtb"> &nbsp</td>
            <td><select name="role">
            <option value="0">Client</option>
            <option value="1">Trainer</option>
            <option value="2">Admin</option>
          </select>
          </td>
            <td><input type="submit" name="" value="Search" id="search" style="vertical-align: middle"></td>
        </tr>
      </table>
      <div style="text-align:center">
        <a href="index.php?accio=addUser" >Add User</a>
      </div>
  </body>
</html>
