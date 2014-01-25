<?php
	include "config.php";
	include "ExamDAO.php";

	$name = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirm = $_POST['cpassword'];

	if($name == ""){
		echo "<script type = 'text/javascript'>alert('Your name is Invalid')</script>";
	}elseif($lname = ""){
		echo "<script type = 'text/javascript'>alert('Your lastname is Invalid')</script>";
	}elseif($email == ""){
		echo "<script type = 'text/javascript'>alert('Your emailadd is Invalid')</script>";
	}elseif($password == ""){
		echo "<script type = 'text/javascript'>alert('Your password is Invalid')</script>";
	}elseif($confirm == ""){
		echo "<script type = 'text/javascript'>alert('Your confirm password is Invalid')</script>";
	}elseif($confirm != $password){
		echo "<script type = 'text/javascript'>alert('Your confirm password and password is not match')</script>";
	}else{
		ExamDAO::createUser($name, $lname, $email, sha1($password), sha1($confirm));
	}

?>