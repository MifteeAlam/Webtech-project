
<?php 
    require_once('db.php');     

    $con = getConnection();
    $sql = "UPDATE projects SET project_name = '{$_POST['project_name']}', details = '{$_POST['details']}' WHERE id='" . $_GET["id"] . "'";

    // $sql = "DELETE FROM projects WHERE project_name = {$_POST['id']}";  
    if(mysqli_query($con, $sql)){
        header('Location: ./welcome.php');
    }else{
        return false;
    }

?>