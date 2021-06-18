<?php
include("header.php");
print_r($_SESSION['cart']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Man's shirt-sati loudey || loundry bala</title>
    
    <link rel="stylesheet" href="styl.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
</head>
<body>
                    
    <!---------------------type of washing----------------->
    <div class="small-container detail-1">
        <div class="row">
            <div class="col-2">
                <img src="images/washing-machine-womens-loose-fit-t-shirt.jpg"width="100%">
            </div>
            <div class="col-2">
            <form action="manage_card.php" method="POST">
                <p>ladies shirt & T-shirts</p>
                <h1>Shirt & T-shirts</h1>
                <p>Rs.10/one<p>
                <select>
                    <option>Want iron</option>
                    <option>YES</option>
                    <option>NO</option>
                    
                </select>
                <input type="number"value="1">
                <button type="submit" name="ADD_TO_CART" class="btn">Add to cart</button>
                <input type="hidden" name="item_name" value="ShirtandT-shirts">
                <input type="hidden" name="price" value="10">
            </form>
            </div>
        </div>
    </div>
    <div class="small-container">
        <h2 class="title2">Type of washing for ladies</h2>
        <div class="row">
        <div class="col-4">
            <img src="images/woman undergarments.jpg">
            <h4>Woman's under garments</h4>
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
             <img src="images/0_Woman-holding-huge-pile-of-clothes-laundry-concept.jpg">
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
             <img src="images/Sock-in-shoe.jpg">
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

    <!---------------------type of washing for girls----------------->
   
    <!------------------------testiomonial------------------------->

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