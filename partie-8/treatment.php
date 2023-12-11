<?php
if (isset($_POST['last-name']) && !empty($_POST['last-name']) &&
isset($_POST['first-name']) && !empty($_POST['first-name']) &&
isset($_POST['age']) && !empty($_POST['age'])) {

  session_start ();

$_SESSION['last-name'] = $_POST['last-name'];
$_SESSION['first-name'] = $_POST['first-name'];
$_SESSION['age'] = $_POST['age'];
} 


header('Location : ../index.php');
