<?php
  $conn = mysqli_connect("us-cdbr-east-02.cleardb.com/heroku_da19d50f9fb9eea?reconnect=true","b226643cd887f1","7fe23f7f","users");
  if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
?>
