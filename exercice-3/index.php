<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="./treatment.php" method="post">
  <label for="lastname">Last Name :</label>
  <input type="text" name="lastname">
  
  <label for="password">Password :</label>
  <input type="password" name="password">

  <button type="submit">Log in</button>
</form>

<?php 

if (isset($_COOKIE['lastname']) && !empty($_COOKIE['lastname']) &&
isset($_COOKIE['password']) && !empty($_COOKIE['password']) ) {
  
  echo $_COOKIE['lastname'];
  echo $_COOKIE['password'];
  
}
?>
</body>
</html>