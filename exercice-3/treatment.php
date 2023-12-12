<?php

var_dump($_POST);


if (isset($_POST['lastname']) && !empty($_POST['lastname']) &&
isset($_POST['password']) && !empty($_POST['password']) ) {

  var_dump('hello');
  setcookie('lastname', $_POST['lastname'], time()+3600, '/');
  setcookie('password', $_POST['password'], time()+3600, '/');

} 

header('Location : ./index.php');
