<!DOCTYPE html>
<html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <style>
        .dropdown {
            position: absolute;

            display: inline-block;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            align-items: left;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            padding: 12px 16px;
            z-index: 1;
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
        }
        /* Slideshow container */
        
        .slideshow-container {
            max-width: 3000px;
            position: relative;
            margin: 30px;
            min-height: 100px;
            line-height: 50px;
        }
        /* Caption text */
        
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }
        /* Number text (1/3 etc) */
        
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }
        /* The dots/bullets/indicators */
        
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }
        
        .active {
            background-color: #717171;
        }
        /* Fading animation */
        
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }
        
        @keyframes fade {
            from {
                opacity: .8
            }
            to {
                opacity: 4
            }
        }
        /* On smaller screens, decrease text size */
        
        @media only screen and (max-width: 300px) {
            .text {
                font-size: 11px;
            }
        }
        a{
            color: black;
            text-decoration: none;
        }
        .select2-container .select2-selection--single{
    height:54px !important;
    width: 100px;
}
.select2-container--default .select2-selection--single{
         border: 1px solid #ccc !important; 
     border-radius: 0px !important; 
     
}
    </style>

         <title>ONE-CLICK-PICK</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body bgcolor="#F1F3F6">
     <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <table border="0" width="100%" bgcolor="#85b878">
        <tr>
            <tr>
            <td align="left"><img src="./IMAGES/logo2.jpeg" width="100" height="50">

        </td>

        <div class="container">
        <div class="left">
            <form class="row-mb-3">
                
                <td><select class="form-control select2">
                   <option>Select</option> 
                   <option>Car</option> 
                   <option>Bike</option> 
                   <option>Scooter</option> 
                   <option>Cycle</option> 
                   <option>Horse</option> 
                </select>
</td>

<td><input type="button" value="Search" style="width: 100px; height: 36px;">

                         <td align="left"><img src="./IMAGES/logo2.jpeg" width="100" height="50">
          
            
            </form>
            
        </div>
    </div>
    <script>
        $('.select2').select2();
        </script>
            <td align="center">
<?php

require("conf.php");
   session_start();  
   $_SESSION['email'];
   

 ?>
 
 

<a href="./register.php">
<img src="./IMAGES/user.jpeg"  width="50px" height="50px"><br><span>
     <?php echo $_SESSION['email']; ?> 
</span>
</td></a>



            
        </tr>   
    </table>
    <table border="0 " width="100% " bgcolor="white " height="8% ">
        <th width="10.5% ">
            <div class="dropdown ">
                <span></span>
                <img src="./IMAGES/cat.webp" width="100" height="100"><br>Electronics
                <div class="dropdown-content ">
                <a href="camera.php"><p>Camera</p></a>
                <a href="laptop.php"><p>Laptop and Desktop</p></a>
                <a href="powerbank.php"><p>Powerbank</p></a>
                <a href="bluetooth.php"><p>Bluetooth Speaker/Sound bar</p></a>
                
                </div>
                </div>
                </th>
        <th width="10.5% ">
            <div class="dropdown ">
                <span></span>
                <img src="./IMAGES/cat1.webp" width="100" height="100"><br>Appliances
                <div class="dropdown-content ">
                <a href="television.php">Television</a>
                <a href="k_a.php"><p>Kitchen Appliances</p></a>
                <a href="W_machine.php"><p>Washing Machines</p></a>
                <a href="refgi.php"><p>Refrigerator</p></a>
                </div>
                </div>
                </th>
        <th width="12.5% ">
            <div class="dropdown ">
                <span></span>
                <img src="./IMAGES/cat2.webp" width="100" height="100" ><br>Fashion
                <div class="dropdown-content ">
                <a href="mens.php"><p>Mens</p></a>
                <a href="womes.php"><p>Womens</p></a>
               <a href="kid.php"> <p>Kids</p></a>
                <a href="bag1.php"><p>Bags</p></a>
                </div>
                </div>
                </th>
        <th width="12.5% ">
            <div class="dropdown ">
                <span></span>
                <img src="./IMAGES/cusImage.jpg" width="90" height="100"><br><a href="Cus.php">Customize</a>
                </div>
                </th>
        <th width="12.5% ">
            <div class="dropdown ">
                <span></span>
                <img src="./IMAGES/cat3.webp" width="100" height="100"><br>Home & Furniture
                <div class="dropdown-content ">
                <a href="bedroom.php"><p>Bedroom Furniture</p></a>
                <a href="homeD.php"><p>Home Decor</p></a>
                </div>
                </div>
                </th>
        <th width="12.5% ">
            <div class="dropdown ">
                <span></span>
                <img src="./IMAGES/catbeauty.jpg" width="100" height="100"><br>Beauty product
                <div class="dropdown-content ">
                <p>Hair Care and Accessory</p>
                <p>Makeup</p>
                <p>Fragrances</p>
                <p>Oral care</p>
                </div>
                </div>
                </th>
        <th width="12.5% ">
            <div class="dropdown ">
                <span></span><img src="./IMAGES/cat4.webp" width="100" height="100"><br>offers
                </div>
                </th>
        
    </table>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <main>
        <!-- Slider start -->
        <div class="slideshow-container ">
    
            <div class="mySlides fade ">
                <div class="numbertext "></div>
                <img src="./IMAGES/slider1.webp" style="width:100% ">
                <div class="text "></div>
            </div>
    
            <div class="mySlides fade ">
                <div class="numbertext "></div>
                <img src="./IMAGES/slider5.webp" style="width:100% ">
                <div class="text "></div>
            </div>
    
            <div class="mySlides fade ">
                <div class="numbertext "></div>
                <img src="./IMAGES/slider 3.png" style="width:100% ">
                <div class="text "></div>
            </div>
    
        </div>
        <br>
    
        <div style="text-align:center ">
            <span class="dot "></span>
            <span class="dot "></span>
            <span class="dot "></span>
        </div>
        <!-- Slider Ends -->
    </main>
    <footer></footer>
    <script>
        let slideIndex = 0;
        showSlides();
    
        function showSlides() {
            let i;
            let slides= document.getElementsByClassName("mySlides ");
            let dots = document.getElementsByClassName("dot ");
            for (i = 0; i < slides.length; i++)
             {
                slides[i].style.display = "none ";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active ", " ");
            }
            slides[slideIndex - 1].style.display = "block ";
            dots[slideIndex - 1].className += " active ";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>
    
    <br><br>
    <table border="0 " width="100% " bgcolor="white ">
        <tr>
            <th colspan="5 ">
                <h2>Appliances</h2>
                <hr>
            </th>
            <tr>
            <tbody>
                <tr>
                <?php
                  $con =mysqli_connect('localhost','root');
                  mysqli_select_db($con,'displayupload');
                  $displayquery="SELECT image, username, price FROM appliance ";

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
                <img src="<?php echo $result['image'];?>" height="250" width="300"/>
                <h4> <?php echo $result['username'];?></h4>
                <h4> <?php echo $result['price'];?></h4>
                <a href="pro1.php"><button class="btn btn-primary text-uppercase mr-2 px-4">Buy Now</button></a>
            </td>
            
            
          
       
                           
                        <?php
                  }
                  
                           ?>
                </tr>
                  
</tbody>                    
    </table>
    <br><br>
    <table border="0 " width="100% " bgcolor="white ">
    <tr>
            <th colspan="5 ">
                <h2>Fashion</h2>
                <hr>
            </th>
            <tr>
            <tbody>
                <tr>
                <?php
                  $con =mysqli_connect('localhost','root');
                  mysqli_select_db($con,'displayupload');
                  $displayquery="SELECT image, username, price FROM fashion ";

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
    </table>
    <br><br>
        
    <table border="0 " width="100% " bgcolor="white ">
    <tr>
            <th colspan="5 ">
                <h2>Mobiles</h2>
                <hr>
            </th>
            <tr>
            <tbody>
                <tr>
                <?php
                  $con =mysqli_connect('localhost','root');
                  mysqli_select_db($con,'displayupload');
                  $displayquery="SELECT image, username, price FROM mobile ";
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
    </table>
    <br><br>
    <table border="0 " width="100% " bgcolor="white ">
    <tr>
            <th colspan="5 ">
                <h2>Bags</h2>
                <hr>
            </th>
            <tr>
            <tbody>
                <tr>
                <?php
                  $con =mysqli_connect('localhost','root');
                  mysqli_select_db($con,'displayupload');
                  $displayquery="SELECT image, username, price FROM bags ";

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
                <h4> <?php echo $result['username'];?></h4>
                <h4> <?php echo $result['price'];?></h4>
                <button class="btn btn-primary text-uppercase mr-2 px-4">Buy Now</button>
            </td>
            
            
          
       
                           
                        <?php
                  }
                  
                           ?>
                </tr>
                </tbody>                    
    </table>
    <br><br>
            
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