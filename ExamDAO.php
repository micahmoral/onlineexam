<?php
include "config.php";
class ExamDAO {
	public static function getQuestion($id){
		$sql = "SELECT *FROM questions WHERE id = '{id}'";
		$result = mysql_query($sql);
		if(mysql_num_rows($result) > 0) {
			$question = mysql_fetch_assoc($result);
			return $question;
		}else {
			return false;
		}
	}
	public static function getUser($password,$email){
		$sql = "SELECT FROM examinee where email = '{$email}' AND password = '{$password}'";
		$result = mysql_query($sql);
		if(mysql_num_rows($result) > 0) {
			$question = mysql_fetch_assoc($result);
			return $user;
		}else {
			return false;
		}
	}
	public static function createUser(
		$first_name,
		$last_name,
		$email_address,
		$password) {
		$query = "INSERT INTO examinee (fname, lname, email, password) 
			VALUES ('$first_name', '$last_name', '$email_address', '$password')";
		$result = mysql_query($query);
		echo "<script type = 'text/javascript'>alert('You are now registered!!')</script>";
	}
}
