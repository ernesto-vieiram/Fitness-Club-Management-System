<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<table style="table-layout:fixed">
      <th width= 50px align="left">ID</th>
      <th width=150px align="left">Name</th>
      <th width=250px align="left">Surname</th>
      <th width=250px align="left">Email</th>
      <th width=50px align="left">Role</th>
  <?php
  foreach($users as $user){
      echo "<tr>";
      echo "<td width=50px align='left'>$user[0]</td>";
      echo "<td width=150px align='left'>$user[1]</td>";
      echo "<td width=250px align='left'>$user[2]</td>";
      echo "<td width=250px align='left'>$user[3]</td>";
      echo "<td width=50px align='left'>$user[4]</td>";
      echo "<td><a href='index.php?accio=deleteUser&Id=$user[0]'>Delete</td>";
  } ?>
</table>


  </body>
</html>
