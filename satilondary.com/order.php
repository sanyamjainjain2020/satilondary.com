<?php
session_start();
$con=mysqli_connect("localhost","root","","laundry order");
if(mysqli_connect_error())
{
    echo"<script>
        alert('sorry site is in mantainince');
        window.location.href='cart.php';
    </script>";
    exit();
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['order']))
    {
        $query1="INSERT INTO `order_manager`( `Full_name`, `phone_No`, `Address`, `Payment_Mode`) VALUES ('$_POST[name]','$_POST[phone]','$_POST[address]','$_POST[pay_mode]')";
        if(mysqli_query($con,$query1))
        {
            $order_id=mysqli_insert_id($con);
            $query2= "INSERT INTO `user_orders`(`order_id`, `Wash_type`, `Price`, `Quantity`) VALUES (?,?,?,?)";
            $stmt=mysqli_prepare($con,$query2);
            if($stmt)
            {
                mysqli_stmt_bind_param($stmt,"isii",$order_id,$item_name,$price,$Quantity);
                foreach($_SESSION['cart'] as $key => $value)
                {
                    $item_name=$value['item_name'];
                    $price=$value['price'];
                    $Quantity=$value['Quantity'];
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
                echo"<script>
                    alert('order plased');
                    window.location.href='home_page.php';
                </script>";
            }
            else{
                echo"<script>
                alert('sql query prepair error');
                window.location.href='cart.php';
            </script>";
            }
        }
        else
        {
            echo"<script>
                alert('sql error');
                window.location.href='cart.php';
            </script>";
        }
    }
}
?>