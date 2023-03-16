<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        </style>
        <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./css/bootstrap.css.map" rel="stylesheet">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/bootstrap.css.map" rel="stylesheet">
    <link href="./css/bootstrap.rtl.css" rel="stylesheet">
    <link href="./css/bootstrap.rtl.css" rel="stylesheet">
    <link href="./css/bootstrap.rtl.min.css" rel="stylesheet">
    <link href="./css/bootstrap.rtl.min.css.map" rel="stylesheet">
    <link rel="stylesheet" href="./related.css">
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg" style="background-color: #ccffd1;">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php"><img src="./IMAGES/logo2.jpeg" width="200" height="50"></a>
            </div>  
        </nav>        
<div class="container mt-5 mb-5">
    
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                            <div class="text-center p-4"> <img id="main-image" src="./IMAGES/home theater.webp" width="250" /> </div>
                            <div class="thumbnail text-center"> <img onclick="change_image(this)" src="./IMAGES/home2.jpg" width="70"> <img onclick="change_image(this)" src="./IMAGES/homet1.jpg" width="70"> </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i> <span class="ml-1"></span> </div> <i class="fa fa-shopping-cart text-muted"></i>
                            </div>
                            <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand"></span>
                                <h5 class="text">Panasonic Home Theater</h5>
                                <div class="price d-flex flex-row align-items-center"> <span class="act-price"></span>
                                    <div class="ml-2"> <small class="dis-price"><h3><b>30,000/-</b></h3></small> </div>
                                </div>
                            </div>
                            <p class="about">Panasonic SC-HT150GW-K 30 W, 2.1 ch Bluetooth Home Theatre  (Black, 2.1 Channel)
                    Visit the Panasonic Store</p>
                            <div class="sizes mt-5">
                                <h6 class="text-uppercase">Colour</h6> <label class="radio"> <input type="radio" name="size" value="S" checked> <span>Gray</span> </label> <label class="radio"> <input type="radio" name="size" value="Brown"> <span>White</span> </label> <label class="radio"> <input type="radio" name="size" value="White"> <span>Blue</span> </label> <label class="radio"> 
                            </div>
                            <div class="cart mt-4 align-items-center">
                                <a href="cart.php"><button class="btn btn-primary text-uppercase mr-2 px-4">Add to cart</button></a> <a href="billing 1.php"> <button class="btn btn-primary text-uppercase mr-2 px-4">Buy Now</button> </a> 

                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </header>
    <br><br>
    <table border="0 " width="100% " bgcolor="white ">
    <tr>
            <th colspan="5 ">
                <h2>Related Products</h2>
                <hr>
            </th>
            <tr>
            <tbody>
                <tr>
                <?php
                  $con =mysqli_connect('localhost','root');
                  mysqli_select_db($con,'displayupload');
                  $displayquery="SELECT image, username, price FROM relatedpro3 ";
                  $querydisplay= mysqli_query($con,$displayquery);

                  //$row=mysqli_num_rows($querydisplay);

                  /// Image retriving code //////
                     ?>

                
                  
                    <?php

                  while($result=mysqli_fetch_array($querydisplay))
                  {
                    ?>
                
            <td>
            <div class="Prodct">
                <img src="<?php echo $result['image'];?>" height="250" width="250"/>
                <h5> <?php echo $result['username'];?></h5>
                <h5> <?php echo $result['price'];?></h5>
                <button class="btn btn-primary text-uppercase mr-2 px-4">Buy Now</button>
            </td>
                <?php

                  }
                  
                           ?>
                </tr>
                  
</tbody>                    
    </table><br><br>
    <table border="0 " width="100% " bgcolor="#ccffd1">
        
        <td>
            <ul>
                <li>
                    <font color="black ">Facebook</font>
                </li>
                <li>
                    <font color="black ">Twitter</font>
                </li>
                <li>
                    <font color="black ">Instagram</font>
                </li>
                <li>
                    <font color="black ">YouTube</font>
                </li>
            </ul>
        </td>
        <td>
            <ul>
                <li>
                    <font color="black ">BS7 Technology</font>
                </li>
                <li>
                    <font color="black ">+91 9392970035</font>
                </li>
                <li>
                    <font color="black ">India</font>
                </li>
                <li>
                    <font color="black ">517-415</font>
                </li>
            </ul>
        </td>
        <td><input type="button " placeholder="Search " style="width: 50%; ">
            <input type="button " value="Search ">
            </ul>
        </td>
    </table>
    <table border="0 " width="100% " bgcolor="#baed42">
        <tr>
            <th bgcolor="#85b878 ">
                <font color="white ">Thanks for visitng our webpage</font>
            </th>
        </tr>


        

</body>
</html>