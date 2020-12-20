<?php

	session_start();


	$link = mysqli_connect("localhost", "root", "", "tweeter");


	if(mysqli_connect_error()){
		print_r(mysqli_connect_error());
		exit();
	}

	if ($_GET['function'] == "logout") {
		# code...
		session_unset();
	}

	
?>