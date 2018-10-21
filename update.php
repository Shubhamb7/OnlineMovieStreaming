<?php
  session_start();
  include 'dbh.php';

if(isset($_POST['sub'])){

    $nam = strtolower($_POST['fname']);
    $phn =  $_POST['phn'];
    $rid = $_SESSION['id'];
    $date = $_POST['dob'];

    $nsql = "UPDATE user1 SET name= '$nam', DOB= '$date',phone= '$phn' WHERE id='$rid'";
    $result = mysqli_query($conn,$nsql);
    header("Location: account.php");
   }
?>
