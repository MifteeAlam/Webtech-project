<?php 
	require_once('db.php');

	
	
		$con = getConnection();
		
$sql = "INSERT INTO projects (id, project_name, details, picture)VALUES ('','{$_POST['project_name']}','{$_POST['details']}','')";
		if(mysqli_query($con, $sql)){
			header('Location: ./welcome.php');
		}else{
			return false;
		}


?>
