

<?php
include("header.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/7d76e5958c.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br><br>




   <div class="container mt-5 mb-5">
    
    <div class="row d-flex justify-content-center">

                    <div class="col-md-4">
                        <div class="images p-3">
                            <div class="text-center p-4"> <img id="main-image" src="./IMAGES/Washing-Machines.webp" width="400" /> </div>
                            <div class="thumbnail text-center"> <img onclick="change_image(this)" src="./IMAGES/washin1.jpg" width="90"> <img onclick="change_image(this)" src="./IMAGES/washin2.jpg" width="90"> </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form action="manage_cart.php" method="POST">
                        <div class="product p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center"> <span class="ml-1"></span> </div>
                            </div>
                            <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand"></span>
                                <b><h5 class="text">LG 7.5 kg 5 Star Semi-Automatic Washing Machine (P7525SPAZ, Purple, Roller Jet Pulsator)</h5></b>
                                <div class="price d-flex flex-row align-items-center"> <span class="act-price"></span>
                                    <div class="ml-2"> <small class="dis-price"><h3><b>30000/-</b></h3></small> </div>
                                </div>
                            </div>
                            <b><p class="about">About this item<br>1. 
                                                5 Star Energy Rated Model : Best In Class Efficiency<br>2. 
                                                Capacity 6.5 Kg : Suitable For Bachelors & Couples<br> 3.
                                                Manufacturer Warranty: 2 Years On Product And 10 Years On Motor*T&C<br> 4. 
                                                Fully-Automatic Top Load Washing Machine Easy To Use<br> 5.
                                                700 Rpm: Higher Spin Speeds Helps In Faster Drying.
                                                                    Visit the Panasonic Store</p></b>
                            <div class="sizes mt-5">
                                <h6 class="text-uppercase">Colour</h6> <label class="radio"> <input type="radio" name="size" value="S" checked> <span>Gray</span> </label> <label class="radio"> <input type="radio" name="size" value="Brown"> <span>White</span> </label> <label class="radio"> <input type="radio" name="size" value="White"> <span>Blue</span> </label> <label class="radio"> 
                            </div>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="LG 7.5 kg 5 Star Semi-Automatic Washing Machine (P7525SPAZ, Purple, Roller Jet Pulsator)">
                    <input type="hidden" name="Price" value="30000">

</div>
</div>
</div>
</div>
<br><br>
<style>
    *{
    margin: 0px;
    padding: 0px;
    font-family: poppins;
    box-sizing: border-box;
}
a{
    text-decoration: none;
}
#testimonials{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    width:100%;
}
.testimonial-heading{
    letter-spacing: 1px;
    margin: 30px 0px;
    padding: 10px 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
 
.testimonial-heading span{
    font-size: 1.3rem;
    color: #252525;
    margin-bottom: 10px;
    letter-spacing: 2px;
    text-transform: uppercase;
}
.testimonial-box-container{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    width:100%;
}
.testimonial-box{
    width:500px;
    box-shadow: 2px 2px 30px rgba(0,0,0,0.1);
    background-color: #ffffff;
    padding: 20px;
    margin: 15px;
    cursor: pointer;
}
.profile-img{
    width:50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden;
    margin-right: 10px;
}
.profile-img img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}
.profile{
    display: flex;
    align-items: center;
}
.name-user{
    display: flex;
    flex-direction: column;
}
.name-user strong{
    color: #3d3d3d;
    font-size: 1.1rem;
    letter-spacing: 0.5px;
}
.name-user span{
    color: #979797;
    font-size: 0.8rem;
}
.reviews{
    color: #f9d71c;
}
.box-top{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}
.client-comment p{
    font-size: 0.9rem;
    color: #4b4b4b;
}
.testimonial-box:hover{
    transform: translateY(-10px);
    transition: all ease 0.3s;
}
 
@media(max-width:1060px){
    .testimonial-box{
        width:45%;
        padding: 10px;
    }
}
@media(max-width:790px){
    .testimonial-box{
        width:100%;
    }
    .testimonial-heading h1{
        font-size: 1.4rem;
    }
}
@media(max-width:340px){
    .box-top{
        flex-wrap: wrap;
        margin-bottom: 10px;
    }
    .reviews{
        margin-top: 10px;
    }
}
::selection{
    color: #ffffff;
    background-color: #252525;
}
    </style>
    <section id="testimonials">
        <!--heading--->
        <div class="testimonial-heading">
            <span>Comments</span>
            <h4>Clients Says</h4>
        </div>
        <!--testimonials-box-container------>
        <div class="testimonial-box-container">
            <!--BOX-1-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png" />
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>Liam mendes</strong>
                            <span>@liammendes</span>
                        </div>
                    </div>
                    <!--reviews------>
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i><!--Empty star-->
                    </div>
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates incidunt blanditiis sed atque cumque.</p>
                </div>
            </div>
            <!--BOX-2-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png" />
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>Noah Wood</strong>
                            <span>@noahwood</span>
                        </div>
                    </div>
                    <!--reviews------>
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><!--Empty star-->
                    </div>
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates incidunt blanditiis sed atque cumque.</p>
                </div>
            </div>
            <!--BOX-3-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png" />
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>Oliver Queen</strong>
                            <span>@oliverqueen</span>
                        </div>
                    </div>
                    <!--reviews------>
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i><!--Empty star-->
                    </div>
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates incidunt blanditiis sed atque cumque.</p>
                </div>
            </div>
            <!--BOX-4-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png" />
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>Barry Allen</strong>
                            <span>@barryallen</span>
                        </div>
                    </div>
                    <!--reviews------>
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i><!--Empty star-->
                    </div>
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates incidunt blanditiis sed atque cumque.</p>
                </div>
            </div>
        </div>
      </section>



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
                  $displayquery="SELECT image, username, price FROM relatedpro2 ";

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
