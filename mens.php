<!DOCTYPE html>
<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <style>
        .dropdown {
            position: absolute;
            align-items: center;
            justify-content: left;
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
                font-size: 11px
            }
        }
        a{
            color: black;
            text-decoration: none;
        }
    </style>
    </style>
    <title>ONE-CLICK-PICK</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body bgcolor="#F1F3F6">
<nav class="navbar navbar-expand-lg" style="background-color: #ccffd1;">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php"><img src="./IMAGES/logo2.jpeg" width="200" height="50"></a>
            </div>  
        </nav>        

    
    <br><br>
    <table border="0 " width="100% " bgcolor="white ">
        <tr>
            <th colspan="5 ">
                <center><h2>SHIRT</h2></center>
                <hr>
            </th>
            <tr>
            <tbody>
                <tr>
                <?php
                  $con =mysqli_connect('localhost','root');
                  mysqli_select_db($con,'displayupload');
                  $displayquery="SELECT image, username, price FROM shirt";

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
    <table border="0 " width="100% " bgcolor="white ">
    <tr>
            <th colspan="5 ">
            <center><h2>T-SHIRT</h2></center>
                <hr>
            </th>
            <tr>
            <tbody>
                <tr>
                <?php
                  $con =mysqli_connect('localhost','root');
                  mysqli_select_db($con,'displayupload');
                  $displayquery="SELECT image, username, price FROM tshirt";

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
                <a href="pro4.php"><button class="btn btn-primary text-uppercase mr-2 px-4">Buy Now</button></a>
            </td>
            
            
          
       
                           
                        <?php
                  }
                  
                           ?>
                </tr>
                  
</tbody>                    
    </table>
    <br><br>
        
    <br><br>
    <table border="0 " width="100% " bgcolor="white ">
    <tr>
            <th colspan="5 ">
            <center><h2>PANT</h2></center>
                <hr>
            </th>
            <tr>
            <tbody>
                <tr>
                <?php
                  $con =mysqli_connect('localhost','root');
                  mysqli_select_db($con,'displayupload');
                  $displayquery="SELECT image, username, price FROM pant";

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
                <a href="pro4.php"><button class="btn btn-primary text-uppercase mr-2 px-4">Buy Now</button></a>
            </td>
            
            
          
       
                           
                        <?php
                  }
                  
                           ?>
                </tr>
                  
</tbody>                    
    </table>
    <br><br>
    
    <br><br>
    <table border="0 " width="100% " bgcolor="white ">
    <tr>
            <th colspan="5 ">
            <center><h2>INDIAN WEAR</h2></center>
                <hr>
            </th>
            <tr>
            <tbody>
                <tr>
                <?php
                  $con =mysqli_connect('localhost','root');
                  mysqli_select_db($con,'displayupload');
                  $displayquery="SELECT image, username, price FROM kurtimens";

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
                <a href="pro4.php"><button class="btn btn-primary text-uppercase mr-2 px-4">Buy Now</button></a>
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