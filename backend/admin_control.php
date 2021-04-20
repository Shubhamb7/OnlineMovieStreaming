<?php
session_start();
if (isset($_POST['upload'])) {

  include 'dbh.php';

  $targetvid = "video-uploads/".basename($_FILES['video']['name']);
  $target = "uploads/".basename($_FILES['image']['name']);
  $name = strtolower($_POST['mname']);
  $rdate = $_POST['release'];
  $genre = strtolower($_POST['genre']);
  $rtime = $_POST['rtime'];
  $desc = $_POST['desc'];
  $image = $_FILES['image']['name'];
  $video = $_FILES['video']['name'];

  $sql = "INSERT INTO movies (name, rdate, genre, runtime, decription, imgpath, videopath)
            VALUES( ? , ? , ? , ? , ? , ? , ? )";

  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $stmt = $conn->prepare($sql);

  $stmt->bind_param("sssssss", $name, $rdate, $genre, $rtime, $desc, $image, $video);

  $stmt->execute();

  if (move_uploaded_file($_FILES['image']['tmp_name'],$target) && move_uploaded_file($_FILES['video']['tmp_name'],$targetvid)) {
    header("Location: homepage.php");
  }else {
    echo "error uploading";
  }
}


?>
