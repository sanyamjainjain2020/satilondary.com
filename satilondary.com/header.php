<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    
</head>
<body>
<div class="hader">

<div class="container">
    <div class="navbar">
        <div class="logo">
            <a href="home_page.php"><img src="images/imgbin_laundry-dhobi-cartoon-png.png"width="90px">
        </div>
        <nav>
            <ul id="menuitems">
                <li><a href="home_page.php">Home</a></li>
                <li><a href="mans_survice.php">Man's cloths</a></li>
                <li><a href="ladey_survices.php">Ladies cloths</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contect</a></li>
                <li><a href="">Account</a></li>
            </ul>
        </nav>
        <a href="cart.php"><img src="images/imgbin_laundry-icon-cleaning-icon-wash-icon-png.png" width="60px" height="60px"></a>
        <div>
                <?php
                    $count=0;
                    if(isset($_SESSION['cart']))
                    {
                        $count=count($_SESSION['cart']);
                    }
                ?>
                <a href="cart.php" class="btn btn-outline-success">(<?php echo $count; ?>)</a>
            </div>
        <img src="images/menubar.png" class="menu-icon" onclick="menutoggle()">
    </div>
   
</div>
</div>

<!------------------------futter------------------------->

<!-----------------------java <script></script> for menutoggele---------------->
<script>
    var menuitems = document.getElementById("menuitems");
    menuitems.style.maxHeight = "0px";
    function menutoggle(){
        if(menuitems.style.maxHeight == "0px")
        {
            menuitems.style.maxHeight = "200px";
        }
        else{
            menuitems.style.maxHeight = "0px";
        }
        
    }
</script>
</body>
</html>