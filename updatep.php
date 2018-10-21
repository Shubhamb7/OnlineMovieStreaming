<?php
  session_start();
  include 'dbh.php';

if(isset($_POST['subpass'])){

    $oldpass = $_POST['oldp'];
    $newpass =  $_POST['newp'];
    $rid = $_SESSION['id'];

    $psql = "UPDATE user1 SET passwd = '$newpass' WHERE id='$rid' AND passwd='$oldpass'";
    $result = mysqli_query($conn,$psql);
    header("Location: accountp.php");
}
?>
