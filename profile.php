<?php
session_start();
        require_once('db.php');

		$con = getConnection();
		$sql = "select * from business_owner where username='{$_SESSION['username']}'";

		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
    <section class="header-section">
        <div class="logo"> </div>
        <div class="user-info">
        <?php
	
if(isset($_SESSION['username'])) {
		echo "welcome " . $_SESSION['username'];}
?>
           
            <a href="session2.php" class="btn">logout</a>
        </div>
    </section>

    <section class="container">
        <div class="sidebar">
            <ul>
                <li><a href="./welcome.php">Dashboard</a></li>
                <li><a href="./profile.php">Profile</a></li>
            </ul>
        </div>
        <div class="main-content">
    
<div align="center">


Name : <?php echo $user["name"] ?>

</br></br>
Email : <?php echo $user["email"] ?>
</br></br>
Phone number : <?php echo $user["phone_number"] ?>
</div>
    </section>
</body>
</html>

