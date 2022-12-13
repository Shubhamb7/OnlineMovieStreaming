<?php
include  __DIR__ . '/../dbh.php';
include_once __DIR__ . '/functions.php';


  $im = "SELECT * FROM movies" ;
  $records = mysqli_query($conn,$im);
  $count = mysqli_num_rows($records);


 // $i=$count;
 //  $j=$count-3;
 //$newim = "SELECT * FROM movies WHERE mid BETWEEN '$j' AND '$i'" ;
  $newim = "SELECT * FROM movies order by mid DESC LIMIT 3";
  $newrecords = mysqli_query($conn,$newim);
    while($fetchr = mysqli_fetch_assoc($newrecords)){

      echoMovie($fetchr['name'], $fetchr['imgpath'], $fetchr['score'], $fetchr['genre']);


    }

    ?>
