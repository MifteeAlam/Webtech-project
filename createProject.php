<?php 
    session_start();

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
                    <form method="post" action="./projectCreation.php">
                        <div align="center">
                        <h1>Create new Project</h1>
                        Upload Your Picture.
                        <p>
                        <input type="button" name="browse" value="Browse...">
                                            No file selected.
                        </p>
                        Enter project name :
                        <input type="text" name="project_name" size=35 maxlength=35 value="">
                        </br></br>
                        Enter project detais :
                        <!-- <input type="text" name="details" size=35 maxlength=35 value=""> </br> </br> -->
                        <!-- Previous Investments received  and your farm details: -->
                        <textarea name="details" cols=30 rows=4></textarea> </br> </br>
                        </br></br>
                        <button size=4>  Cancel  </button>
                        <button type="submit" size=4>  Confirm  </button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </section>
</body>
</html>

