<?php 
require_once('db.php');

$con = getConnection();
$sql = "select * from projects where id='" . $_GET["id"] . "'";

$result = mysqli_query($con, $sql);
$project = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
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
            
            <div>
                <div>
                    <form method="post" action="./updateProject.php?id=<?php echo $project["id"]; ?> ">
                        <div align="center">
                        <h1>Update Project</h1>
                      
                        Enter project name :
                        <input type="text" name="project_name" size=35 maxlength=35 value="<?php echo $project["project_name"]; ?>">
                        </br></br>
                        Enter project detais :
                        <textarea name="details" cols=30 rows=4 ><?php echo $project["details"]; ?></textarea> </br> </br>
                        </br></br>
                        <button size=4>  Cancel  </button>
                        <button type="submit" size=4>  Update  </button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </section>
</body>
</html>

