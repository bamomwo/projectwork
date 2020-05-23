<?php 
	session_start();
	require("connect.php");

		function getlevel($programme){
		$data = substr($programme, -3);
		return $data;
	}

	function getoption($programme){
		$data = substr($programme, 0, -4);
		return $data;
	}


	if(isset($_SESSION['username']) && isset($_SESSION['username'])){
		$programme = $_GET['q'];
		$code = $_SESSION['course_code'];
		$level = getlevel($programme);
		$option = getoption($programme);



		// Insert into table for assignment


		$stmt = $conn->prepare("SELECT student_id FROM registered WHERE programme = ? AND level = ?");
		$stmt->bind_param("ss", $option, $level);
		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($student_id);
		if($stmt->affected_rows > 0){
			while($stmt->fetch()){
				$sql = $conn->prepare("INSERT INTO assignconfig(student_id, course_code)VALUES(?,?)");
				$sql->bind_param("ss",$student_id,$code);
				$sql->execute();
				
			}
		}
		

		// $stmt = $conn->prepare("INSERT INTO assignconfig(student_id) SELECT student_id FROM registered WHERE programme = ? AND level = ?  ");
		// $stmt->bind_param("ss", $option, $level);

		// $stmt->execute();
		// if($stmt->affected_rows > 0){
		// 	echo("<h5 class='text-center text-success mt-3'>Assignment Successful </h5>
		// 		");
		// }else{
		// 	echo("<h5 class='text-center text-danger  mt-3'>Data not Inserted</h5>
		// 			<hr>
		// 			<div class='text-center text-success'>
		// 				<h6> Reasons </h6>
		// 				1. No Student Data Found. <br><br>
		// 				2. Student Data Already Inserted.
		// 			</div>
		// 		");
		// }


		// Obtain total number of peope doing this programme

		// $stmt = $conn->prepare("SELECT COUNT(*) AS progtotal FROM registered WHERE level =? AND programme = ?");
		// $stmt->bind_param("ss", $level, $option);
		// $stmt->execute();
		// $stmt->store_result();
		// $stmt->bind_result($progtotal);
		// $stmt->fetch();


	}

// 	if(isset($_SESSION['username']) && isset($_SESSION['username'])){
// 			$level = $_SESSION['level'];
// 			 $programme = $_SESSION['courses'];
// 			$p = implode(',',$programme);
// 			echo($p);

// 			$sql = "SELECT * FROM registered WHERE  level = '$level' AND programme IN ($p)";

// 		      $res = mysqli_query($conn, $sql);
// 		      if(mysqli_num_rows($res) > 0){
// 		         while($row = mysqli_fetch_assoc($res)){

// 		           var_dump($row);
// 		        }
// }
// 			// while($stmt->fetch()){
// 			// 	echo($id);
// 			// }

// 	}else{
// 		header("Location: logout.php");
// 	}
































 ?>