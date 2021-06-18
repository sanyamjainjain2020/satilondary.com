<?php
    require("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin oanal</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <div class="container">
        <div class="myform">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <h2>ADMIN LOGIN</h2>
                <a href="home_page.php"><h5 >sati laundry</h5></a>
                <input type="text" placeholder="Admin Name" name="adminname">
                <input type="password" placeholder="password"name="adminpass">
                <button type="submit" name="login">LOGIN</button>
            </form>
        </div>
        <div class="image">
            <img src="imgbin_laundry-icon-cleaning-icon-wash-icon-png.png" width="300px">
        </div>
    </div>
<?php   
if(isset($_POST['login']))
{
    $adminname=$_POST['adminname'];
    $adminpass=$_POST['adminpass'];

    $adminname=mysqli_real_escape_string($con,$adminname);
    $adminpass=mysqli_real_escape_string($con,$adminpass);

    $query="SELECT * FROM `admin_login` WHERE `admin_name`=? AND `password`=?";

    if($stmt=mysqli_prepare($con,$query))
    
    {
        
        mysqli_stmt_bind_param($stmt,"ss",$adminname,$adminpass);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt)==1)
        {
            echo"detail match";
            session_start();
            $_SESSION['AdminLoginId']=$adminname;
            header("location: admin_panel.php");
        }
        else
        {
            echo"<script>alert('invalied user name and password');</script>";
        }
        msqli_stmt_close($stmt);
    }
    else{
        echo"sql query not prepaired";
    }
}
?>
</body>
</html>