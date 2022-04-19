<?php
	session_start();    
    require_once('db.php');
    $con = getConnection();
    $sql = "select * from projects ";
    $result = mysqli_query($con, $sql);
    $post = array();
    while($row = mysqli_fetch_array($result))
    {
        $post[] = $row;
    }
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
            
            <div>
                <div align=right> <a href="./createProject.php" size=4 > <button> Create Business + </button> </a> </div>
                <bt><br>
                <div>
                    <table>
                        <tr>
                            <th>Project Name</th>
                            <th>Details </th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr> 
                        <?php foreach ($post as $element)  {?> 
                        <tr>
                            <td> <?php echo $element["project_name"] ?></td> 
                            <td> <?php echo $element["details"] ?></td> 
                            <td> <a href="./editProject.php?id=<?php echo $element["id"]; ?>"> <button>Edit</button></a> </td>
                            <td> <a href="./deleteProject.php?id=<?php echo $element["id"]; ?>"><button> Delete</button></a></td>
                        </tr>      
                        <?php }  ?>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
