<?php
session_start();
if (isset($_POST['upload'])) {

  include __DIR__ . '/dbh.php';

  $targetvid = __DIR__ . "/../video-uploads/".basename($_FILES['video']['name']);
  $target = __DIR__ . "/../uploads/".basename($_FILES['image']['name']);
  $name = strtolower($_POST['mname']);
  $rdate = $_POST['release'];
  $genre = strtolower($_POST['genre']);
  $score = ($_POST['score']);
  $rtime = $_POST['rtime'];
  $desc = $_POST['desc'];
  $image = $_FILES['image']['name'];
  $video = $_FILES['video']['name'];


 if (move_uploaded_file($_FILES['image']['tmp_name'],$target) && move_uploaded_file($_FILES['video']['tmp_name'],$targetvid)) {
  $sql = "INSERT INTO movies (name, rdate, genre, score, runtime, decription, imgpath, videopath)
            VALUES( ? , ? , ? , ? , ? , ? , ?, ? )";

  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $stmt = $conn->prepare($sql);

  $stmt->bind_param("ssssssss", $name, $rdate, $genre, $score, $rtime, $desc, $image, $video);

  $stmt->execute();

  header("Location: ../homepage.php");
     
  } elseif  ($_POST['image_txt'] && $_POST['video_txt']) {

  $image_txt = $_POST['image_txt'];
  $video_txt = $_POST['video_txt'];

  $sql = "INSERT INTO movies (name, rdate, genre, runtime, decription, imgpath, videopath)
          VALUES( ? , ? , ? , ? , ? , ? , ? )";
  
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	$stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $name, $rdate, $genre, $rtime, $desc, $image_txt, $video_txt);
    $stmt->execute();
  
  header("Location: ../homepage.php");
     
  }
  else {
    echo "error uploading...";
	echo " No image/video files information";
  }
    
}

?>
