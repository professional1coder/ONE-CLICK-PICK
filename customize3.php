<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
           .container{
            width:100%
           }
           .progressbar{
            counter-reset: step;
           }
           .progressbar li{
            list-style-type: none;
            float: left;
            width: 33.33%;
            position: relative;
            text-align: center;
           }
           .progressbar li:before{
            content:counter(step);
            counter-increment: step;
            width: 30px;
            height: 30px;
            line-height: 30px;
            border: 1px solid #ddd;
            display: block;
            text-align: center;
            margin: 0 auto 10px auto;
            border-radius: 50%;
            background-color: white;
           }
           .progressbar li:after{
            content:'';
            position: absolute;
            width: 100%;
            height: 1px;
            background-color: #ddd;
            top: 15px;
            left: -50%;
            z-index: -1;
           }
           .progressbar li:second-child:after{
            content: none;
           }
           .progressbar li.active{
            color: green;
           }
           .progressbar li.active:before{
            border-color: green;
           }
           .progressbar li.active + li::after{
            background-color: green;
           }
           .button{
            margin: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
         }  
         .image{
            margin: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
         }  
        
         .Size{
            margin: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
         }  
         .Next{
            margin: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
         } 

         img{
   width: 150px;
   height: 150px;
   margin-right: 10px; 
   margin-left: 20px;   /* Horizontal Space */
   margin-bottom: 50px;  /* Vertical Space */
   border: 2px solid red;
}

    </style>
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./css/bootstrap.css.map" rel="stylesheet">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/bootstrap.css.map" rel="stylesheet">
    <link href="./css/bootstrap.rtl.css" rel="stylesheet">
    <link href="./css/bootstrap.rtl.css" rel="stylesheet">
    <link href="./css/bootstrap.rtl.min.css" rel="stylesheet">
    <link href="./css/bootstrap.rtl.min.css.map" rel="stylesheet">
</head>
<body>
    <header>
      <nav class="navbar navbar-expand-lg" style="background-color: #ccffd1;">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src="./IMAGES/logo2.jpeg" width="200" height="50"></a>
        </div>  
    </nav>      
              </div>
            </div>
          </nav>
          <br>
          <br>
              <div class="container">
                <ul class="progressbar">
                    <li class="active">Pick Size</li>
                    <li> Select Design</li>
                    <li>Preview</li>
                </ul>
              </div>
        <br>
        <br>
        <tr>
            <div class="image">
            <th><img src="./IMAGES/cusTshirt.png" width="25% "></th>
        </div>
        </tr>
        <h1><center>Select tDesign</center></h1>        
            <br>
<div classname="image">
            <a href="batman.php" target="_blank">
                <img src="./IMAGES/cus1.webp" width="150px" ></a>
                <a href="batman.php" target="_blank">
                <img src="./IMAGES/cus1.webp" width="150px" ></a>
                <a href="batman.php" target="_blank">
                <img src="./IMAGES/cus1.webp" width="150px" ></a>
                <a href="batman.php" target="_blank">
                <img src="./IMAGES/cus1.webp" width="150px" ></a>
        </div>
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
    </header>
</body>
</html>