<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie 8</title>
</head>
<body>  

  <!-- EXERCICE 1 -->

<!-- //  $_SERVER['HTTP_USER_AGENT'];
//   $_SERVER['SERVER_ADDR'];
//   $_SERVER['SERVER_NAME'];

  // var_dump($_SERVER['HTTP_USER_AGENT']); -->


<!-- EXERCICE 2 -->
<?php 
session_start();

if (isset($_SESSION['last-name']) && !empty($_SESSION['last-name']) && isset($_SESSION['first-name']) && !empty($_SESSION['first-name']) && isset($_SESSION['age']) && !empty($_SESSION['age']) ) {
?>
<p><?php echo 'C\'est ok.' ?> </p>

<?php 
 } else {
?>
  <form action="./treatment.php" method="post">
  <label for="last-name">Last Name :</label>
  <input type="text" name="last-name">
  
  <label for="first-name">First Name :</label>
  <input type="text" name="first-name">

  <label for="age">Age :</label>
  <input type="text" name="age">

  <button type="submit">Submit</button>
</form>

<?php  
}
?>
 
</body>
</html>