<?php
  $conn = mysqli_connect("us-cdbr-east-02.cleardb.com","b226643cd887f1","7fe23f7f","heroku_da19d50f9fb9eea");
  if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
?>
