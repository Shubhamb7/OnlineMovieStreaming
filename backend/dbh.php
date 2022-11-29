<?php
  $conn = mysqli_connect("localhost","root","","MoviesDB");
  if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
?>
