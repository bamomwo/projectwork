<?php
	session_start();
	require('connect.php');


	if(isset($_SESSION['username']) && isset($_SESSION['username'])){
		$code = $_GET['id'];
		$hall = $_SESSION['currenthall'];


		// Selecting Hall Data;

		$stmt = $conn->prepare("SELECT hallrows, hallcolumns FROM examhalls WHERE hallcode = ?");
		$stmt->bind_param("s", $hall);
		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($hallrows, $hallcolumns);
		$stmt->fetch();




		// Selecting Student Data
		$stmt = $conn->prepare("SELECT COUNT(*) AS total FROM assignconfig WHERE course_code = ?");
		$stmt->bind_param("s", $code);
		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($total);
		$stmt->fetch();


		$stmt = $conn->prepare("SELECT student_id FROM assignconfig WHERE course_code = ?");
		$stmt->bind_param("s",$code);
		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($student_id);
		// $result = $stmt->get_result();

		$mid = array(2,5,8,11,14,17,20,23,26,29,32,35,38,41,44,47,50,53,56,59,62,65,68,71,74,77,80,83,86,89,92,95,98,101,104,107,110,113,116,119,
		122,125,128,131,134,137,140,143,146,149,152,155,158,161,164,167,170,173,176,179,182,185,188,191,194,197,
		200,203,206,209,212,215,218,221,224,227,230,233,236,239,242,245,248,251,254,257,260,263);

		$sql = $conn->prepare("INSERT INTO seatnumbers(rowNo, student_id, course_code)VALUES(?,?,?)");
		$counter = 0;
		while($stmt->fetch()){
			// echo($counter);echo("<br>");
			$rownumber = $mid[$counter];
			$sql->bind_param("iss",$rownumber, $student_id, $code);
			$sql->execute();
			$counter++;
		}





	}



 ?>
