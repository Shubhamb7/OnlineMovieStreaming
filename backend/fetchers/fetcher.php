<?php
include  __DIR__ . '/../dbh.php';
include_once __DIR__ . '/functions.php';


  $im = "SELECT * FROM movies ORDER BY name ASC" ;
  $records = mysqli_query($conn,$im);


  start:
  $i=0;

  echo"<div class='row'>";
    while($result = mysqli_fetch_assoc($records)){
      !empty($result['imgpath']) ? $result['imgpath'] : $result['imgpath'] = 'default.jpg';
        
      echoMovie($result['name'], $result['imgpath'], $result['score'], $result['genre']);

      if ($i==4) {

        echo"</div>";

        goto start;
      }
      $i++;
    }
    echo"</div>";




    ?>
