<?php
  session_start();
  include __DIR__ . '/dbh.php';

if(isset($_POST['subpass'])){

    $oldpass = $_POST['oldp'];
    $newpass =  $_POST['newp'];
    $rid = $_SESSION['id'];

    
$sql = "SELECT * FROM user1 WHERE id =?"; 
$stmt = $conn->prepare($sql); 
$stmt->bind_param("s", $rid);
$stmt->execute();
$row = $stmt->get_result()->fetch_assoc(); // get the mysqli result
    
    
if (is_array($row))

{
  if (password_verify($oldpass, $row['passwd']))
  {
    /* The password is correct. */
    $login = TRUE;
        
    /* Set the "cost" parameter to 12. */
    $options = ['cost' => 12];
    /* Create the hash. */
    $hash = password_hash($newpass, PASSWORD_DEFAULT, $options);

    $sql = "UPDATE user1 SET passwd = '$hash' WHERE id='$rid'";
    $result = mysqli_query($conn,$sql);
    header("Location: ../account_password.php");
  }
    else{
        echo "Error on old password";
    }
}
    
}
?>