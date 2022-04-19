<?php
session_start();
        require_once('db.php');

		$con = getConnection();
		$sql = "select * from business_owner where email='{$_POST['email']}' and password='{$_POST['password']}'";

		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		if($user != null){
			$_SESSION['username'] = $_POST['email'];
			header('Location: ./welcome.php');
		}else{
			echo 'failed';
		}
	




?>

