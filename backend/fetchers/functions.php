<?php


function rate($rating){
  echo "<div class='scoring'>";
    
  switch($rating){
     case 1:
        echo "<i>&#x2605;</i>";  
        echo "<i>&#x2730</i>";
        echo "<i>&#x2730</i>";
        echo "<i>&#x2730</i>";
        echo "<i>&#x2730</i>";
        echo "<span class='star-value'> 1/5</span>";
     break;
       case 2:
       echo "<i>&#x2605;</i>";  
       echo "<i>&#x2605;</i>";   
       echo "<i>&#x2730</i>";
       echo "<i>&#x2730</i>";
       echo "<i>&#x2730</i>";
       echo "<span class='star-value'> 2/5</span>";  
     break;
       case 3:
      echo "<i>&#x2605;</i>";  
      echo "<i>&#x2605;</i>";   
      echo "<i>&#x2605;</i>";  
      echo "<i>&#x2730</i>";
      echo "<i>&#x2730</i>";
      echo "<span class='star-value'> 3/5</span>";
     break;
       case 4:
      echo "<i>&#x2605;</i>";  
      echo "<i>&#x2605;</i>";   
      echo "<i>&#x2605;</i>"; 
      echo "<i>&#x2605;</i>"; 
      echo "<i>&#x2730</i>";
      echo "<span class='star-value'> 4/5</span>";
     break;
       case 5:
      echo "<i>&#x2605;</i>";  
      echo "<i>&#x2605;</i>";   
      echo "<i>&#x2605;</i>"; 
      echo "<i>&#x2605;</i>"; 
      echo "<i>&#x2605;</i>"; 
      echo "<span class='star-value'> 5/5</span>";
     break;
    echo "</div>";
  }
}


function genre_tags($genre){
    echo "<div class='genre'>";
   $actual_genre = explode(" ",$genre);
  foreach ($actual_genre as $genre_text){
      echo "<span>$genre_text</span>";

   }
    echo "</div>";
}

function echoMovie($name, $imgpath, $score, $genre){

    echo "<form action='movie.php' method='POST'>";
    echo "<div class='col'>";
	echo "<figure class='poster'>";
    echo "<img class='card-movie' src='uploads/" . $imgpath . "' />";
    rate($score);
    if($genre){
         genre_tags($genre);
     }
    echo "</figure>";
	echo "<div class='noob'>";
    echo "<input type='submit' name='submit' class='btn btn-outline-info' style='display:block;width:200px;padding-bottom:15px;margin-bottom:30px;margin-left:30px;margin-right:20px;' value='" . ucwords($name) . "'/>";
    echo "</div>";
    echo "</div>";
    echo "</form>";

}


?>