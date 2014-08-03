<?php 

	//Start session
	session_start();

	//Check wether the session variable SESS_MEMBER_ID present or not

	if (!isset($_SESSION['SESS_MEMBER_ID']) || trim($_SESSION['SESS_MEMBER_ID'] == '')) {
		header('location: index.php');
		exit();
	}


?>