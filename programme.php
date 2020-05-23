<?php 
	session_start();
	require("connect.php");

	function getlevel($course_code){
		$course_code = str_replace(' ', '', $course_code);
		$course_code =substr($course_code, 3,1);
		
		if($course_code == 4){
			return 400;
		}elseif ($course_code == 3) {
			return 300;
		}elseif ($course_code == 2) {
			return 200;
		}elseif ($course_code == 1) {
			return 100;
		}
	}


	if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
		$course_code = $_GET['q'];
		$_SESSION['course_code'] = $course_code;
		$level = getlevel($course_code);
		$_SESSION['level'] = $level;

			

		echo('
				<table class="table table-striped text-primary">
					<thead>
						<tr>
							<th>Programme</th>
						</tr>
					</thead>
					<tbody>
			');
		$stmt = $conn->prepare("SELECT programme FROM coursesprogrammes WHERE course_code = ?  AND level = ? AND writtendate = ?");
		$stmt->bind_param("sis", $course_code, $level, $date);
		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($programme);


		while($stmt->fetch()){
			echo('
					<tr>
						<td>
						
						<button type="button" class="mb-2 btn btn-default" value="'.$programme.'-'.$level.'" onclick="progDetails(this.value);" ><label class="cont"><input type="checkbox" ><span class="checkmar"> </span></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '.$programme.'</button></td>
					</tr>
				');
		}
		echo('</tbody>
				</table>
			');

		

		
	}


 ?>