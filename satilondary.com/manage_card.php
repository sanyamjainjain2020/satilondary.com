<?php
session_start();



if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['ADD_TO_CART']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitems=array_column($_SESSION['cart'],'item_name');
            if(in_array($_POST['item_name'],$myitems))
            {
                echo"<script>
                    alert('item already added');
                    window.location.href='home_page.php';
                </script>";
            }
            else
            {
                $count=count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],'Quantity'=>1);
                print_r($_SESSION['cart']);
                echo"<script>
                    alert('item added');
                    window.location.href='home_page.php';
                </script>";
            }
            
        }
        else 
        {
            $_SESSION['cart'][0]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],'Quantity'=>1);
            print_r($_SESSION['cart']);
            echo"<script>
                alert('item added');
                window.location.href='home_page.php';
            </script>";
        }
    }
    if(isset($_POST['remove_item']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['item_name']==$_POST['item_name'])
            {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']);
                echo"<script>
                    alert('removed Item');
                    window.location.href='cart.php';
                </script>";
            }
        }
    }
    if(isset($_POST['save_q']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['item_name']==$_POST['item_name'])
            {
                $_SESSION['cart'][$key]['Quantity']=$_POST['save_q'];
                //print_r($_SESSION['cart']);
                echo"<script>
                    window.location.href='cart.php';
                </script>";
            }
        }
    }
}

?>