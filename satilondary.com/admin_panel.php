<?php
    require("connection.php");
    session_start();
    session_regenerate_id(true);
    if(!isset($_SESSION['AdminLoginId']))
    {
        header("location: login1.php");
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Admin Panel</title>
    <style>
    body{
        margin: 0;
        
    }
    div.header{
        color: #f0f0f0;
        font-family: poppins;
        display: flex;
        flex-direction:row;
        align-items: center;
        justify-content: space-between;
        padding: 0 60px;
        background-color: #1c1c1e;
    }
    div.header button{
        background-color: #f0f0f0;
        font-size: 16px;
        font-weight: 550;
        padding: 8px 12px;
        border: 2px solid black;
        border-radius: 50px;
    }
    }
    </style>
</head>
<body>
    <div class="header">
        <h1>ADMIN PANEL - <?php echo $_SESSION['AdminLoginId'] ?></h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <button type="submit" name="logout">LOG OUT</button>
        </form>
    </div>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <table class="table text-center table-dark">
            <thead>
                <tr>
                <th scope="col">Order ID</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Phone No.</th>
                <th scope="col">Address</th>
                <th scope="col">Order</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $query="SELECT * FROM `order_manager` ";
                $user_result=mysqli_query($con,$query);
                while($user_fetch= mysqli_fetch_assoc($user_result))
                {
                    echo"
                    <tr>
                        <th>$user_fetch[order_id]</th>
                        <td>$user_fetch[Full_name]</td>
                        <td>$user_fetch[phone_No]</td>
                        <td>$user_fetch[Address]</td>
                        
                        <td>
                            <table class='table text-center table-dark'>
                            <thead>
                                <tr>
                                    <th scope='col'>Item Name</th>
                                    <th scope='col'>price</th>
                                    <th scope='col'>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                    
                    ";
                            $order_query="SELECT * FROM `user_orders` WHERE `order_id`=$user_fetch[order_id]";
                            $order_result=mysqli_query($con,$order_query);
                            while($order_fetch=mysqli_fetch_assoc($order_result))
                            {
                                echo"
                                    <tr>
                                        <td>$order_fetch[Wash_type]</td>
                                        <td>$order_fetch[Price]</td>
                                        <td>$order_fetch[Quantity]</td>
                                    </tr>
                                ";
                            }
                    echo"
                            <tbody>
                            </table>
                        </td>
                    </tr>
                    ";
                }
            ?>

           
            </tbody>
            </table>
        </div>
    </div>
</div>

<?php 
if(isset($_POST['logout']))
{
    session_destroy();
    header("location: login1.php");
}

?>
</body>
</html>