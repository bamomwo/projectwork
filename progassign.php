<?php 
	session_start();
	require('connect.php');

	// function to obtain number of students doing a particular course

	function getCourseNumber($conn,$code){
		$stmt = $conn->prepare("SELECT COUNT(*) AS coursenumber FROM assignconfig WHERE course_code = ?");
		$stmt->bind_param("s", $code);
		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($coursenumber);
		$stmt->fetch();
		return $coursenumber;
	}

	if(isset($_SESSION['username']) && !empty($username)){

		$stmt = $conn->prepare("SELECT COUNT(*) AS total FROM assignconfig ");
		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($total);
		$stmt->fetch();

		echo('
				<button type="button" class="btn btn-success rounded-0">
				  Total Student Number <span class="badge badge-primary">'.$total.'</span>
				</button>
			');

		echo('
				<h6 class="text-primary text-center mb-2"> HALL DETAILS</h6><hr>
				<table class="table table-striped">
					<tbody>
					<thead  class="bg-success text-white">
						<tr>
							<th>Course-Code</th>
							<th> No Of Students</th>
							<th>Action</th>
						</tr>
					</thead>

			');
				$something = "good";

			$stmt = $conn->prepare("SELECT DISTINCT course_code FROM assignconfig");
			$stmt->execute();
			$stmt->store_result();
			$stmt->bind_result($code);

			while($stmt->fetch()){
				echo('	
					<tr>
						<td class="text-primary">'.$code.'</td>
						<td class="text-danger">'.getCourseNumber($conn,$code) .'</td>
						<td> 
						<div class="dropdown">
<button class="btn btn-info btn-sm  rounded-pill dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Select Seat Arragement
  </button>
  <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item bg-success text-white" href="oneperseat.php?id='.$code.'"><b>One Per Seat</b></a>
    <a class="dropdown-item bg-success text-white" href="#"><b>Two Per Seat</b></a>
  </div>
</div>
</td>
</tr>
					');
			}


		echo('
				</tbody>
				</table>
			');

	}else{
		header("Location: logout.php");
	}


?>