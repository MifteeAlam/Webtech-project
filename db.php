<?php 

	$host = "localhost";
	$dbuser = "root";
	$dbpassword = '';
	$dbname = 'farmer_user_account';

	function getConnection(){
		global $host;
		global $dbuser;
		global $dbpassword;
		global $dbname;

		$con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
		return $con;
	}

?>