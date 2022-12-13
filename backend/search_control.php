<?php
include __DIR__ .'/dbh.php';
include __DIR__ .'/fetchers/functions.php';
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
    !empty($final['imgpath']) ? $final['imgpath'] : $final['imgpath'] = 'default.jpg';
        
      echoMovie($final['name'], $final['imgpath'], $final['score'], $final['genre']);

      if ($i==4) {

        echo"</div>";

        goto start;
      }
      $i++;
    }
    echo"</div>";

  }


 ?>
