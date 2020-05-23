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
		// $stmt->store_result();
		// $stmt->bind_result($student_id);
		$result = $stmt->get_result();

	$mid = array(2,5,8,11,14,17,20,23,26,29,32,35,38,41,44,47,50,53,56,59,62,65,68,71,74,77,80,83,86,89,92,95,98);
		
		
		while($row = $result->fetch_array()){	
			$data[] = $row;	
		}
		var_dump($data[0][0]);die();


		for($i=0; $i<=count($data); $i++){

			$stmt = $conn->prepare("INSERT INTO seatnumbers(columnNo,rowNo,student_id,course_code)VALUES(?,?,?,?)");
			$row = $mid[$i];
			$std_id = $data[$i];
			echo($std_id);die();
			$stmt->bind_param("iiss", $i,$row,$student_id,$code);
			$stmt->execute();

		}




	}
	


 ?>