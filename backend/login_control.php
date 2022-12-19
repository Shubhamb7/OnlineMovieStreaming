<?php
  session_start();
  include __DIR__ . '/dbh.php';

    $username =  $_POST['mail'];
    $password =  $_POST['pass'];
/*

    $sql = "SELECT * FROM user1 WHERE username = '$username' AND passwd = '$password' ";

    $result = $conn->query($sql);

    if(!$row = $result->fetch_assoc()) {
      echo "incorrect username or password";
    }else {

        $_SESSION['id'] = $row['id'];
        header("Location: ../homepage.php");
      }
*/
$sql = "SELECT * FROM user1 WHERE username =?"; 
$stmt = $conn->prepare($sql); 
$stmt->bind_param("s", $username);
$stmt->execute();
$row = $stmt->get_result()->fetch_assoc(); // get the mysqli result

if (!is_array($row))
{
    echo "incorrect username or password";
}
else{
  if (password_verify($password, $row['passwd']))
  {
    /* The password is correct. */
    $login = TRUE;
	$_SESSION['id'] = $row['id'];
    header("Location: ../homepage.php");
  }
  else{
      echo "incorrect username or password";
}
}

?>
