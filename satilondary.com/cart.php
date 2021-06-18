<?php
    include("header.php");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-2 text-center border rounded bg-light">
                <h1>MY CART</h1>
            </div>
            
        </div>
        <div class="row">
            <div class="col-2">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Serial No.</th>
                        <th scope="col">Washing cloth</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantaty</th>
                        <th scope="col">total</th>
                        <th scope="col">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                            if(isset($_SESSION['cart']))
                            {
                                foreach($_SESSION['cart'] as $key => $value)
                                {
                                    $sr=$key+1;
                                    
                                    echo"
                                        <tr>
                                            <td>$sr</td>
                                            <td>$value[item_name]</td>
                                            <td>$value[price]<input type='hidden' class='iprice' value='$value[price]'></td>
                                            <td>
                                                <form action='manage_card.php' method='POST'>
                                                    <input class='iquantity' name='save_q' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'>
                                                    <input type='hidden' name='item_name' value='$value[item_name]'>
                                                </form>
                                            </td>
                                            <td class='itotal'></td>
                                            <td>
                                                <form action='manage_card.php' method='POST'>
                                                    <button name='remove_item' class='btn'>REMOVE</button>
                                                    <input type='hidden' name='item_name' value='$value[item_name]'>
                                                </form>
                                            </td>
                                        </tr>
                                    ";
                                }
                            }
                        ?>
                        
                    </tbody>
                </table>
            </div>
            <div class="col-23">
                <h2>Grand Total</h2>
                <h1 id="gtotal"></h1>
                <?php
                    if(isset($_SESSION['cart'])&& count($_SESSION['cart'])>0)
                    {
                ?>
                        <form action="order.php" method="post">
                            <div class="form-group">
                                <label >Full Name</label>
                                <br>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label >Phone No.</label>
                                <br>
                                <input type="text" name="phone" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label >Address</label>
                                <br>
                                <input type="text" name="address" class="form-control" required>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pay_mode" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Case after wash
                                </label>
                            </div>

                            <button class="btn btn-primary btn-block" name="order">Wash</button>
                        </form>
                <?php 
                    }
                ?>
            </div>
        </div>
    </div>
    <script>
    var gt=0;
    var iprice = document.getElementsByClassName('iprice');
    var iquantity= document.getElementsByClassName('iquantity');
    var itotal = document.getElementsByClassName('itotal');
    var gtotal = document.getElementById('gtotal');

    function subTotal()
    {
        gt=0;
        for(i=0;i<iprice.length;i++)
        {
            itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
            gt=gt+(iprice[i].value)*(iquantity[i].value);
        }
        gtotal.innerText=gt;
    }
    subTotal();

</script>

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
</body>
</html>