<?php

	// declare date  and time

	$date = gmdate('Y-m-d');
	$time = gmdate('h:i:s');

	

	$server ='localhost';
	$username='root';
	$password = '';
	$dbname = 'project';



	$conn = mysqli_connect($server, $username, $password,$dbname);

	if(!$conn){
		die();
	}

?>