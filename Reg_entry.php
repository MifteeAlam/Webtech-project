<?php 
	require_once('db.php');

	
	
		$con = getConnection();
		
$sql = "INSERT INTO business_owner (id, name, business_details, profile_picture, username, password, email, phone_number)VALUES ('','{$_POST['name']}','{$_POST['comp']}','','{$_POST['email']}','{$_POST['password']}','{$_POST['email']}','{$_POST['phone']}')";
		if(mysqli_query($con, $sql)){
			header('Location: ./login.php');
		}else{
			return false;
		}


?>
