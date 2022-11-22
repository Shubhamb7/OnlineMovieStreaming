<?php

function echoMovie($name, $imgpath){

    echo "<form action='movie.php' method='POST'>";
    echo "<div class='col'>";
    echo "<img src='uploads/" . $imgpath . "' height='250' width='200' style='margin-top: 30px;margin-left:30px;margin-right:20px;' />";
    echo "<div class='noob'>";
    echo "<input type='submit' name='submit' class='btn btn-outline-info' style='display:block;width:200px;padding-bottom:15px;margin-bottom:30px;margin-left:30px;margin-right:20px;' value='" . ucwords($name) . "'/>";
    echo "</div>";
    echo "</div>";
    echo "</form>";

}
?>