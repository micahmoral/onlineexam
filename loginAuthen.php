<?php 

require_once('config.php');
require_once('ExamDAO.php');

if(!empty($_POST['email']) && (!empty($_POST['password']))){
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$result = ExamDAO::getUser($email, $pass);
	if($result){
		header('location:question.php');
	}else{
		echo "<script>alert('Wrong email or Password');window.location.href='question.php'</script>'";
	}

}else{
	header('location:questionn.php');
}

 ?>