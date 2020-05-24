<?php
  session_start();
  require("connect.php");


  if(isset($_SESSION['username']) && isset($_SESSION['username'])){

    $sid = $_GET['q'];
    $stmt = $conn->prepare("SELECT columnNo, rowNo FROM seatnumbers WHERE student_id = ?" );
    $stmt->bind_param("s", $sid);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($rowNo, $columnNo);
    $stmt->fetch();





  }else{
    header("Location: logout.php");
  }


 ?>
