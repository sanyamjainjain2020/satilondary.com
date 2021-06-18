<?php
session_start();
print_r($_SESSION['cart']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sati laundry || laundry bala</title>
    <link rel="stylesheet" href="styl.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Poppins:ital,wght@0,400;0,500;0,600;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="hader">

    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="home_page.php" ><img src="images/imgbin_laundry-dhobi-cartoon-png.png"width="90px"></a>
            </div>
            <nav>
                <ul id="menuitems">
                    <li><a href="home_page.php">Home</a></li>
                    <li><a href="mans_survice.php">Man's cloths</a></li>
                    <li><a href="ladey_survices.php">Ladies cloths</a></li>
                    <li><a href="samplehomepage.html">About</a></li>
                    <li><a href="">Contect</a></li>
                    <li><a href="login1.php">admin login</a></li>
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
                <a href="cart.php" class="btn btn-outline-success"><?php echo $count; ?></a>
            </div>
            <img src="images/menubar.png" class="menu-icon" onclick="menutoggle()">
        </div>
        <div class="row">
            <div class="col-2">
                <h1>Wash your clothes<br> hand free! </h1>
                <p>we will do your work when you need we care about your hands </p>
                <a href=""class="btn">Wash Hand Free &#8594;</a>
            </div>
            <div class="col-2">
                <img src="images/funny washinng.png">
            </div>
        </div>
    </div>
    </div>
    <!-----------------categury--------------->
        <div class="categories">
            <div class="small-container">
                <div class="row">
                    <div class="col-3">
                        <img src="images/hand_washing_SP_main.jpg" >
                    </div>
                    <div class="col-3">
                        <img src="images/hand-washing-clothes-in-blue-basin-with-sunlight-picture-id1190518634.jpg" >
                    </div>
                    <div class="col-3">
                        <img src="images/laundry-services.jpg">
                    </div>
                    
                </div>

            </div>
        </div>
            
        
    <!---------------------type of washing----------------->
    <div class="small-container">
       <h2 class="title2">Type of washing for Man's</h2>
       <div class="row">
       <div class="col-4">
           <a href="detail_mans_1.php"><img src="images/shurt.jpg"></a>
           <a href="detail_mans_1.php"><h4>Shirt & T-shirts</h4></a>
           <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
           </div>
           <p>Rs.10/one</p>
       </div>
       <div class="col-4">
            <a href="detail_mans_2.php"><img src="images/washing_jeans_hero.png"></a>
            <h4>Pant & Jeans</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>Rs.10/one</p>
        </div>
        <div class="col-4">
            <a href="detail_mans_3.php"><img src="images/Sock-in-shoe.jpg"></a>
            <h4>Man's socks and shoe </h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>Rs.5/one</p>
        </div>
    
   </div>
   </div>

    <!---------------------type of washing for girls----------------->
    <div class="small-container">
        <h2 class="title2">Type of washing for ladeys</h2>
        <div class="row">
        <div class="col-4">
            <a href="detail_ladey_1.php"><img src="images/washing-machine-womens-loose-fit-t-shirt.jpg"></a>
            <h4>Shirt & T-shirts</h4>
            <div class="rating">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
            </div>
            <p>Rs.10/one</p>
        </div>
        <div class="col-4">
             <a href="detail_ladey_2.php"><img src="images/0_Woman-holding-huge-pile-of-clothes-laundry-concept.jpg"></a>
             <h4>Pant & Jeans</h4>
             <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
             </div>
             <p>Rs.10/one</p>
         </div>
         <div class="col-4">
             <a href="detail_ladey_3.php"><img src="images/Sock-in-shoe.jpg">
             <h4>Woman's socks and shoe</h4>
             <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
             </div>
             <p>Rs.5/one</p>
         </div>
        
    </div> 
    </div>
    <div class="offer">
        <div class="small-container">
            <h1 class="title2">Offer for hostel rooms</h1>
            <div class="row">
                <div class="col-2">
                    <img src="images/imgbin_room-icon-zzz-zzz-icon-buildings-icon-png.png" class="offer-img">
                </div>
                <div class="col-2">
                    <h2>For one months as per two persion.</h2>
                    <h1>IN JUST Rs. 399</h1>
                    <a href=""class="btn">Get it now! &#8594;</a>
                </div>
            </div>
        </div>
    </div> 
    <!------------------------testiomonial------------------------->
    <div class="tastimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>thanks your good survice is amazing they care my cloth very well </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <img src="images/mark zukerburg bhai.jpg">
                    <h3>Mark Zukerburg</h3>
                </div>
                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>
                        <p>thanks your good survice is amazing they care my cloth very well </p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <img src="images/Deepika-Padukone.jpg">
                        <h3>Dipika Padukon</h3>
                    </div>
                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>
                        <p>thanks your good survice is amazing they care my cloth very well </p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <img src="images/jack-ma.jpg">
                        <h3>Jack Ma</h3>
                    </div>
                
            </div>
        </div>
    </div>
<!--------------------------brands------------------------>

<!------------------------futter------------------------->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="futter-col-1">
                <h3>Thank you for visiting.</h3>
                <p>dowload our app to get fast and better interface</p>
            </div>
            <div class="futter-col-2">
                <img src="images/imgbin_laundry-dhobi-cartoon-png.png">
                <p>dowload our app to get fast and better interface and thanks for be hear 
                dowload our app to get fast and better interface and thanks for be hear </p>
            </div>
            <div class="futter-col-3">
                <h3>Useful links</h3>
                <ul>
                    <li>Coupions</li>
                    <li>Bloges post</li>
                    <li>Return policy</li>
                    <li>Join affiliate</li>
                </ul>
            </div>
            <div class="futter-col-4">
                <h3>Follow us</h3>
                <ul>
                    <li>Instagram</li>
                    <li>Facecook</li>
                    <li>LinkDin</li>
                    <li>Twitter</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="contect_us">contect us +91 7000156912</p>
    </div>
</div>
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