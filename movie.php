<?php
session_start();
if (isset($_POST['submit'])) {

  $title = $_POST['submit'];

  include 'dbh.php';
  $im = "SELECT * FROM movies WHERE name = '$title'" ;

  $records = mysqli_query($conn,$im);

  echo"<!DOCTYPE html>";
  echo"<html lang='en' dir='ltr'>";
    echo"<head>";
    
      echo"<meta charset='utf-8'>";
      echo"<title>".$title."</title>";
      echo"<link rel='stylesheet' href='movie.css'>";
      echo"<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>";
    echo"</head>";
    echo"<body style='background-color:#000000;'>";

        echo"<div class='jumbotron' style='background-color:#1C1C1C;'>";
        echo"<div class='container'>";
        while($result = mysqli_fetch_assoc($records)){
            $mname = $result['name'];
            $person = $_SESSION['id'];
            $movieid = $result['mid'];
            $current = $result['viewers'];
            $newcount = $current + 1;
            $newsql = "UPDATE movies SET viewers = '$newcount' WHERE name='$mname' ";
            $nsql = "UPDATE user1 SET mid = '$movieid' WHERE id ='$person' ";
            $updatecount = mysqli_query($conn,$newsql);
            $updatecount = mysqli_query($conn,$nsql);

            echo"<br>";
            echo"<a href='homepage.php' style='font-size: 20px;color:orange;border:1px solid orange;border-radius:5px;padding:10px;text-decoration:none;'>Back to Home </a>";
          echo "<br><br><h5 style='display: inline;color:orange;'><br>movie name : </h5><h5 style='display: inline;color:#D8D8D8;'>".ucwords($result['name'])."</h5>";
          echo"<br><h5 style='display: inline;color:orange;' >genre : </h5><h5 style='display: inline;color:#D8D8D8;'>".ucwords($result['genre'])."</h5>";
          echo"<br><h5 style='display: inline;color:orange;' >release year : </h5><h5 style='display: inline;color:#D8D8D8;'>".$result['rdate']."</h5>";
          echo"<br><h5 style='display: inline;color:orange;' >description : </h5><h5 style='display: inline;color:#D8D8D8;'>".ucfirst($result['decription'])."</h5>";
          echo"<br><h5 style='display: inline;color:orange;' >runtime : </h5><h5 style='display: inline;color:#D8D8D8;'>".$result['runtime']." mins </h5>";
          echo"<br><h5 style='display: inline;color:orange;' >views : </h5><h5 style='display: inline;color:#D8D8D8;'>".$result['viewers']."</h5>";

          echo"<br><br><br>";
          echo"<div class='embed-responsive embed-responsive-16by9'>";
          echo"<iframe class='embed-responsive-item' src='video-uploads/".$result['videopath']."' poster='uploads/".$result['imgpath']."' frameborder='0' allowfullscreen ></iframe>";
          echo"</video>";
          echo"</div>";

        }
        echo"</div>";
        echo"</div>";

    echo"</body>";


  echo"</html>";


}
?>
