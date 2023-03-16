<!DOCTYPE html>
<html>

<head>
    <style>
        .dropdown {
            position: absolute;
            display: inline-block;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            padding: 12px 16px;
            z-index: 1;
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        header {
            padding: 10px 2%;
            display: flex;
            background-color: rgb(169, 208, 245);
        }
        
        header .header-left {
            display: flex;
            align-items: center;
            flex-basis: 50%;
        }
        
        header .logo-img {
            width: 125px;
        }
        
        header form {
            display: flex;
            margin-left: 20px;
        }
        
        header nav {
            flex-basis: 50%;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }
        
        header nav ul {
            list-style-type: none;
            display: flex;
        }
        
        header nav ul li:not(:last-child) {
            margin-right: 10px;
        }
        
        .mySlides {
            display: none;
        }
        
        img {
            vertical-align: middle;
        }
        /* Slideshow container */
        
        .slideshow-container {
            max-width: 3000px;
            position: relative;
            margin: 50px;
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
                opacity: .4
            }
            to {
                opacity: 1
            }
        }
        /* On smaller screens, decrease text size */
    </style>

    <style>


.dropbtn{
padding: 16px;
font-size: 16px;
border:none;
cursor: pointer;

}

#myInput
{
box-sizing: border-box;
background-image: url('searchicon.png');
background-position: 14px 12px;
background-repeat: no-repeat;
font-size :16px;
padding: 14px 20px 12px 45px;
border:none;
border: 5px solid #ddd;
}

#myInput:focus
{
outline:7px solid #ddd;
}

.dropdown{
position :relative;
display: inline-block;
}

.dropdown-content{

display : none;
position : absolute;
background-color: #f6f6f6;
min-width:230px;
overflow: auto;
border : 1px solid #ddd;
z-index:1;
}

.dropdown-content a
{
color: black;
padding :12px 16px;
text-decoration : none;
display:block;
}

.dropdown a :hover
{
background-color:#ddd;
}

.show{
display:block;
}
        </style>
    <title>ONE-CLICK-PICK</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body bgcolor="#F1F3F6">
    <table border="0" width="100%" bgcolor="#A9D0F5">
        <tr>
            <td align="right"><img src="C:\\Users\\Sakshi\\Desktop\\ONE-CLICK-PICK\\IMAGES\\logo1.png" width="150" height="60"></td>
            <td class="dropdown" align="center"><input id="searchbar" onkeyup="search_animal()" type="text"
        name="search" placeholder="Search animals..">
        

            <div id="myDropdown" class="dropdown-content">


<a href="#about">About</a>

<a href="#base">Base</a>

<a href="#blog">Blog</a>

<a href="#contact">Contact</a>

<a href="#custom">Custom</a>

<a href="#support">Support</a>

<a href="#tools">Tools</a>

<a href="#tools">Cyber Warriors YouTube Channel</a>
</div>
            
                <input type="button" value="Search" style="width: 100px; height: 36px;">
            </td>
            <th>
                <font color="white">Login </font>
            </th>
            <th>
                <font color="white">More</font>
            </th>
            <td align="center">
                <img src="C:\\Users\\Sakshi\\Desktop\\ONE-CLICK-PICK\\IMAGES\\user.jpeg" width="100 " height="50 "></td>
        </tr> 
    </table>
    <table border="0 " width="100% " bgcolor="white " height="8% ">
        <th width="12.5% ">
            <div class="dropdown ">
                <span>Electronics</span>
                <div class="dropdown-content ">
                <p>Camera</p> 
                <p>Laptop and Desktop</p>
                <p>Powerbank</p>
                <p>Bluetooth Speaker</p>
                <p>Soundbar</p>
                <p>Home theater</p>
                </div>
                </div>
                </th>
        <th width="12.5% ">
            <div class="dropdown ">
                <span>Appliances</span>
                <div class="dropdown-content ">
                <p>Televisions</p>
                <p>Air conditioners</p>
                <p>Kitchen Appliances</p>
                <p>Washing Machines</p>
                <p>Refrigerator</p>
                <p>Dishwasher</p>
                </div>
                </div>
                </th>
        <th width="12.5% ">
            <div class="dropdown ">
                <span>fashions</span>
                <div class="dropdown-content ">
                <p>Mens</p>
                <p>Womens</p>
                <p>Kids</p>
                <p>Bags, suitcase & Luggage</p>
                </div>
                </div>
                </th>
        <th width="12.5% ">
            <div class="dropdown ">
                <span>Customize</span>
                <div class="dropdown-content ">
                <p>T-shirt</p>
                </div>
                </div>
                </th>
        <th width="12.5% ">
            <div class="dropdown ">
                <span>Home & Furniture</span>
                <div class="dropdown-content ">
                <p>Bedroom Furniture</p>
                <p>Home Decor</p>
                <p>Lighting & Electricals</p>
                <p>Bedsheet</p>
                <p>Pillowcover</p>
                <p>Living Room Furniture</p>
                </div>
                </div>
                </th>
        <th width="12.5% ">
            <div class="dropdown ">
                <span>Beauty product</span>
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
                <span>offers</span>
                </div>
                </th>
        
</table>
<main>
    <!-- Slider start -->
    <div class="slideshow-container ">

        <div class="mySlides fade ">
            <div class="numbertext "></div>
            <img src="./Images/slides.jpg " style="width:100% ">
            <div class="text "></div>
        </div>

        <div class="mySlides fade ">
            <div class="numbertext "></div>
            <img src="./Images/slider2.jpeg " style="width:100% ">
            <div class="text "></div>
        </div>

        <div class="mySlides fade ">
            <div class="numbertext "></div>
            <img src="./Images/slides.jpg " style="width:100% ">
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
        let slides = document.getElementsByClassName("mySlides ");
        let dots = document.getElementsByClassName("dot ");
        for (i = 0; i < slides.length; i++) {
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
    <table border="0 " width="100% " bgcolor="white ">
        <tr>
            <th colspan="5 ">
                <h2>Jewllery</h2>
                <hr>
            </th>

            <tr>
                <th><img src="/Users/chinmaytawde/Desktop/jwel1.jpeg " width="75% "></th>
                <th><img src="/Users/chinmaytawde/Desktop/jwel2.jpeg " width="75% "></th>
                <th><img src="/Users/chinmaytawde/Desktop/jwel3.jpeg " width="75% "></th>
                <th><img src="/Users/chinmaytawde/Desktop/jwel4.jpeg " width="75% "></th>
                <th><img src="/Users/chinmaytawde/Desktop/jwel5.jpeg " width="75% "></th>
            </tr>

        </tr>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <tr>
            <th>
                <a href="jew.html "><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></a>
            </th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th>
                <a href="jew.html "><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></a>
            </th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
        </tr>
        </tr>
    </table>
    <br>
    <table border="0 " width="100% " bgcolor="white ">
        <tr>
            <th colspan="5 ">
                <h2>Camaras</h2>
                <hr>
            </th>

            <tr>
                <th><img src="/Users/chinmaytawde/Desktop/cam1.jpeg " width="75% "></th>
                <th><img src="/Users/chinmaytawde/Desktop/cam2.jpeg " width="75% "></th>
                <th><img src="/Users/chinmaytawde/Desktop/cam3.jpeg " width="75% "></th>
                <th><img src="/Users/chinmaytawde/Desktop/cam4.jpeg " width="75% "></th>
                <th><img src="/Users/chinmaytawde/Desktop/cam5.jpeg " width="75% "></th>
            </tr>

        </tr>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <tr>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
        </tr>
        </tr>
    </table>

    <br>
    <table border="0 " width="100% " bgcolor="white ">
        <tr>
            <th colspan="5 ">
                <h2>Mobiles</h2>
                <hr>
            </th>

            <tr>
                <th><img src="/Users/chinmaytawde/Desktop/mobile1.jpeg " width="75% "></th>
                <th><img src="/Users/chinmaytawde/Desktop/mobile2.jpeg " width="75% "></th>
                <th><img src="/Users/chinmaytawde/Desktop/mobile3.jpeg " width="75% "></th>
                <th><img src="/Users/chinmaytawde/Desktop/mobile4.jpeg " width="75% "></th>
                <th><img src="/Users/chinmaytawde/Desktop/mobile5.jpeg " width="75% "></th>
            </tr>

        </tr>
        <th>Price:
            <font color="green "> 19,999/-</font>
        </th>
        <th>Price:
            <font color="green "> 23,499/-</font>
        </th>
        <th>Price:
            <font color="green "> 28,999/-</font>
        </th>
        <th>Price:
            <font color="green "> 30,000/-</font>
        </th>
        <th>Price:
            <font color="green "> 21,999/-</font>
        </th>
        <tr>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
        </tr>
        </tr>
    </table>

    <br>
    <table border="0 " width="100% " bgcolor="white ">
        <tr>
            <th colspan="5 ">
                <h2>Bags</h2>
                <hr>
            </th>

            <tr>
                <th><img src="bag1.jpg " width="75% "></th>
                <th><img src="bag2.jpg " width="75% "></th>
                <th><img src="bag3.jpg " width="75% "></th>
                <th><img src="bag4.jpg " width="75% "></th>
                <th><img src="bag5.jpg " width="75% "></th>
            </tr>

        </tr>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <tr>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
        </tr>
        </tr>
    </table>
    <br>
    <table border="0 " width="100% " bgcolor="white ">
        <tr>
            <th colspan="5 ">
                <h2>Pendrives</h2>
                <hr>
            </th>

            <tr>
                <th><img src="pendrive1.jpg " width="75% "></th>
                <th><img src="pendrive2.jpg " width="75% "></th>
                <th><img src="pendrive3.jpg " width="75% "></th>
                <th><img src="pendrive4.jpg " width="75% "></th>
                <th><img src="pendrive5.jpg " width="75% "></th>
            </tr>

        </tr>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <tr>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
        </tr>
        </tr>
    </table>
    <br>
    <table border="0 " width="100% " bgcolor="white ">
        <tr>
            <th colspan="5 ">
                <h2>Watches</h2>
                <hr>
            </th>

            <tr>
                <th><img src="lwatch5.jpg " width="75% "></th>
                <th><img src="lwatch7.jpg " width="75% "></th>
                <th><img src="lwatch4.jpg " width="75% "></th>
                <th><img src="lwatch3.jpg " width="75% "></th>
                <th><img src="lwatch6.jpg " width="75% "></th>
            </tr>

        </tr>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <tr>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
        </tr>
        </tr>
    </table>
    <br>
    <table border="0 " width="100% " bgcolor="white ">
        <tr>
            <th colspan="5 ">
                <h2>Women</h2>
                <hr>
            </th>

            <tr>
                <th><img src="dress1.jpg " width="75% "></th>
                <th><img src="dress2.jpg " width="75% "></th>
                <th><img src="dress3.jpg " width="75% "></th>
                <th><img src="dress4.jpg " width="75% "></th>
                <th><img src="dress5.jpg " width="75% "></th>
            </tr>

        </tr>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <tr>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
        </tr>
        </tr>
    </table>
    <br>
    <table border="0 " width="100% " bgcolor="white ">
        <tr>
            <th colspan="5 ">
                <h2>Shoes</h2>
                <hr>
            </th>

            <tr>
                <th><img src="shoe1.jpg " width="75% "></th>
                <th><img src="shoe3.jpg " width="75% "></th>
                <th><img src="shoe4.jpg " width="75% "></th>
                <th><img src="shoe6.jpg " width="75% "></th>
                <th><img src="shoe5.jpg " width="75% "></th>
            </tr>

        </tr>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <tr>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
        </tr>
        </tr>
    </table>
    <br>
    <table border="0 " width="100% " bgcolor="white ">
        <tr>
            <th colspan="5 ">
                <h2>Headset</h2>
                <hr>
            </th>

            <tr>
                <th><img src="headset1.jpg " width="75% "></th>
                <th><img src="headset2.jpg " width="75% "></th>
                <th><img src="headset3.jpg " width="75% "></th>
                <th><img src="headset4.jpg " width="75% "></th>
                <th><img src="headset5.jpg " width="75% "></th>
            </tr>

        </tr>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <tr>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
        </tr>
        </tr>
    </table>
    <br>
    <table border="0 " width="100% " bgcolor="white ">
        <tr>
            <th colspan="5 ">
                <h2>Men</h2>
                <hr>
            </th>

            <tr>
                <th><img src="shirt1.jpg " width="75% "></th>
                <th><img src="shirt2.jpg " width="75% "></th>
                <th><img src="shirt3.jpg " width="75% "></th>
                <th><img src="shirt4.jpg " width="75% "></th>
                <th><img src="shirt5.jpg " width="75% "></th>
            </tr>

        </tr>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <th>Price:
            <font color="green "> 999/-</font>
        </th>
        <tr>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
            <th><input type="button " value="Show Details " style="width: 150px; height: 30px; background-color: blue; color: white; "></th>
        </tr>
        </tr>
    </table>




    <table border="0 " width="100% " bgcolor="blue ">
        <tr>
            <td bgcolor="black " width="25% ">
                <font color="white ">Quick Links</font>
            </td>
            <td bgcolor="black " width="25% ">
                <font color="white ">Follow Us</font>
            </td>
            <td bgcolor="black " width="25% ">
                <font color="white ">Contact</font>
            </td>
            <td bgcolor="black " width="25% ">
                <font color="white ">Search</font>
            </td>
        </tr>
        <td>
            <ul>
                <li>
                    <font color="white ">Electronics</font>
                </li>
                <li>
                    <font color="white ">TVs & Appliances</font>
                </li>
                <li>
                    <font color="white ">Men</font>
                </li>
                <li>
                    <font color="white ">Women</font>
                </li>
            </ul>
        </td>
        <td>
            <ul>
                <li>
                    <font color="white ">Facebook</font>
                </li>
                <li>
                    <font color="white ">Twitter</font>
                </li>
                <li>
                    <font color="white ">Instagram</font>
                </li>
                <li>
                    <font color="white ">YouTube</font>
                </li>
            </ul>
        </td>
        <td>
            <ul>
                <li>
                    <font color="white ">BS7 Technology</font>
                </li>
                <li>
                    <font color="white ">+91 9392970035</font>
                </li>
                <li>
                    <font color="white ">India</font>
                </li>
                <li>
                    <font color="white ">517-415</font>
                </li>
            </ul>
        </td>
        <td><input type="button " placeholder="Search " style="width: 50%; ">
            <input type="button " value="Search ">
            </ul>
        </td>
    </table>
    <table border="0 " width="100% " bgcolor="blue ">
        <tr>
            <th bgcolor="black ">
                <font color="white ">Thanks for visitng our webpage. Keep touch with us for better products.</font>
            </th>
        </tr>
<script>
        function search_animal() {
    let input = document.getElementById('searchbar').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('animals');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="list-item";                 
        }
    }
}
    </script>
    


</body>

</html>