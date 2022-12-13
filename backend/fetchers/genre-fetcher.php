<?php
  include __DIR__ . '/../dbh.php';
include_once "functions.php";

  if($_REQUEST["screen"] == "return_genres"){
    get_movie_genres();

  }else if($_REQUEST["screen"] == "return_filtered_movies"){
      get_movies_by_genre();
  }

  function get_movie_genres(){
    global $conn;

    $sql = "SELECT DISTINCT(genre) FROM movies ";
    $records = mysqli_query($conn,$sql);
    $result = mysqli_fetch_all($records);
    echo json_encode($result);
  }

  function get_movies_by_genre(){
    global $conn;

    $sql = "SELECT * FROM movies WHERE genre = ? ORDER BY name ASC" ;
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("s", $_REQUEST["genre"]);

    $stmt->execute();

    $records = $stmt->get_result();

    start:
    $i=0;

    echo"<div class='row'>";
    while($result = mysqli_fetch_assoc($records)){
      echoMovie($result['name'], $result['imgpath'], $result['score'], $result['genre']);

      if ($i==4) {

        echo"</div>";

        goto start;
      }
      $i++;
    }
    echo"</div>";
  }

  ?>
