<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['save'])){
		$stud_no = $_POST['stud_no'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$gender = $_POST['gender'];
		$yrsec = $_POST['section'];
		// $yrsec = $_POST['year']."".$_POST['section'];
		$password = $_POST['password'];
		// $password = md5($_POST['password']);
		
		mysqli_query($conn, "INSERT INTO `student` VALUES('', '$stud_no', '$firstname', '$lastname', '$gender', '$yrsec', '$password')") or die(mysqli_error());
		
		echo "<script> alert('Registration Successuful'); window.location='../index.php' </script>";
		// header('location: code/index.php');
	}
?>