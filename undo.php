<?php
	session_start();
	require('connect.php');


	if(isset($_SESSION['department']) && !empty($_SESSION['department'])){

		$dept = $_SESSION['department'];
		echo($dept);
		$sql = "DELETE FROM registered WHERE department = '$dept'";
		$res = mysqli_query($conn,$sql);
		if($res){
			$_SESSION['undoErrType'] = 'success';
			$_SESSION['undoErrMsg'] = 'Undo Successful';
		}else{
			$_SESSION['undoErrType'] = 'success';
			$_SESSION['undoErrMsg'] = 'Oops Try Again';
		}
	}

	header("Location: registeredstudents.php");

?>