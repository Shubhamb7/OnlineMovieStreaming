<?php
include '../dbh.php';
include_once "functions.php";


  $im = "SELECT * FROM movies ORDER BY name ASC" ;
  $records = mysqli_query($conn,$im);

  start:
  $i=0;

  echo"<div class='row'>";
    while($result = mysqli_fetch_assoc($records)){

      echoMovie($result['name'], $result['imgpath']);

      if ($i==4) {

        echo"</div>";

        goto start;
      }
      $i++;
    }
    echo"</div>";




    ?>
