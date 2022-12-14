<?php
session_start();
if (isset($_POST['submit'])) {

  $title = $_POST['submit'];

  include 'backend/dbh.php';
  $im = "SELECT * FROM movies WHERE name = '$title'" ;

  $records = mysqli_query($conn,$im);

  echo"<!DOCTYPE html>";
  echo"<html lang='en' dir='ltr'>";
    echo"<head>";
      ?>
    <link
            href="https://unpkg.com/video.js@7/dist/video-js.min.css"
            rel="stylesheet"
    />
    <link href="https://unpkg.com/@videojs/themes@1/dist/forest/index.css" rel="stylesheet">

    <?php
      echo"<meta charset='utf-8'>";
      echo"<title>".$title."</title>";
      echo "<link rel='stylesheet' href='css/movie.css'>";
      echo"<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>";
    echo"</head>";
    echo"<body style='background-color:#000000;'>";

        echo"<div class='jumbotron' style='background-color:#1C1C1C;margin-bottom: 0px;'>";
        echo"<div class='inner'>";
        while($result = mysqli_fetch_assoc($records)){
            $mname = $result['name'];
            $person = $_SESSION['id'];
            $movieid = $result['mid'];
            $score = $result['score'];
            $current = $result['viewers'];
            $newcount = $current + 1;
            $newsql = "UPDATE movies SET viewers = '$newcount' WHERE name='$mname' ";
            $nsql = "UPDATE user1 SET mid = '$movieid' WHERE id ='$person' ";
            $updatecount = mysqli_query($conn,$newsql);
            $updatecount = mysqli_query($conn,$nsql);

            echo"<a href='homepage.php' style='font-size: 20px;color:orange;border:1px solid orange;border-radius:5px;padding:10px;text-decoration:none;'>Back to Home </a><br>";

          echo "<br></div><h1 style='display: inline;color:#D8D8D8;'>".ucwords($result['name'])."</h1>";
          echo"<br><h5 style='display: inline;color:#D8D8D8;'>".ucfirst($result['decription'])."</h5>";


          echo"<br><div class='info'><h5 style='display: inline;color:#D8D8D8;'>".$result['rdate']."</h5>";
          echo"<h5 style='display: inline;color:#D8D8D8;'>".ucwords($result['genre'])."</h5>";
          echo"<br>";
          echo"<h5 style='display: inline;color:orange;' >Runtime : </h5><h5 style='display: inline;color:#D8D8D8;'>".$result['runtime']." mins </h5>";
          echo" - ";
          echo"<h5 style='display: inline;color:orange;' >Score : </h5><h5 style='display: inline;color:#D8D8D8;'>".$result['score']."</h5>";
          echo" - ";
          echo"<h5 style='display: inline;color:orange;' >Views : </h5><h5 style='display: inline;color:#D8D8D8;'>".$result['viewers']."</h5></div>";
          echo"</div>";

            echo"</div>";
            echo"</div>";
          ?>

          <div class="video-container">

            <video
                    id="my-video"
                    class="video-js vjs-theme-forest"
                    controls
                    preload="auto"
                    width="960"
                    height="540"
                    poster="uploads/<?php echo $result['imgpath']; ?>"
                    data-setup="{}"
            >
  
  
                <source src="video-uploads/<?php echo $result['videopath']; ?>" type="video/webm">


                <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a
                    web browser that
                    <a href="https://videojs.com/html5-video-support/" target="_blank"
                    >supports HTML5 video</a
                    >
                </p>
            </video>
          </div>


       <?php
//   file:///Movies and TV Shows/Movies/tom.and.jerry/tom_and_jerry.mkv
        }

        echo '<script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>';

    echo"</body>";


  echo"</html>";


}
?>
