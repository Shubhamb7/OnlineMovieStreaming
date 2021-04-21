<?php
include 'dbh.php';
include 'fetchers/functions.php';
if(isset($_POST['submit'])){

    $option = $_POST['option'];
    $text =  strtolower($_POST['textoption']);
    $person = $_SESSION['id'];

    $found = "SELECT * FROM movies WHERE $option LIKE '%{$text}%'";
    $display = mysqli_query($conn,$found);

  start:
  $i=0;

  echo"<div class='row'>";
    while($final = mysqli_fetch_assoc($display)){

      echoMovie($final['name'], $final['imgpath']);

      if ($i==4) {

        echo"</div>";

        goto start;
      }
      $i++;
    }
    echo"</div>";

  }


 ?>
