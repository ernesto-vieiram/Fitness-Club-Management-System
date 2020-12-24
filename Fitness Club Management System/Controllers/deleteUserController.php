<?php
  include __DIR__.'/../Model/BD.php';

  $Id=$_GET['Id'];

  removeUser($Id);

  include __DIR__.'/../Controllers/manageUsersController.php';

 ?>
