<?php
  session_start();
  include __DIR__ . '/dbh.php';


    $fname = strtolower($_POST['fname']);
    $lname =  strtolower($_POST['lname']);
    $name = $fname." ".$lname;
    $phn =  $_POST['phn'];
    $email =  $_POST['mail'];
    $username =  $_POST['mail'];
    $password =  $_POST['pass'];
    $date = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $dob = $date."/".$month."/".$year;

/* Set the "cost" parameter to 12. */
$options = ['cost' => 12];
/* Create the hash. */
$hash = password_hash($password, PASSWORD_DEFAULT, $options);

    $sql = "INSERT INTO user1(username, passwd, name, phone, email, DOB)
    values( ? , ? , ? , ? , ? , ? )";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $username, $hash, $name, $phn, $email, $dob);
    $stmt->execute();

    header("Location: ../user-login.php");
?>
