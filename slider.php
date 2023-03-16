<!DOCTYPE html>
<html>

<head>
    <style>
        #main {
            height: auto;
            width: 100%;
            position: relative;
        }
        
        img {
            height: auto;
            width: 100%;
        }
        
        #one,
        #two,
        #three {
            position: absolute;
            background-color: pink;
            bottom: 5px;
            height: 5px;
            width: 20px;
            border-radius: 10%;
            cursor: pointer;
        }
        
        #one {
            left: 45%;
            margin-left: -10px;
        }
        
        #two {
            left: 50%;
            margin-left: -10px;
        }
        
        #three {
            left: 55%;
            margin-left: -10px;
        }
        
        #one:hover,
        #two:hover,
        #three:hover {
            background-color: white;
        }
    </style>
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
    </style>
</head>

<body>
    <div id="main">
        <img src= "C:\Users\Sakshi\Desktop\ONE-CLICK-PICK\IMAGES\slider1.jpeg" id="slideimage">
        <div id="one">
        </div>
        <div id="two">

        </div>
        <div id="three">

        </div>
    </div>
    <script>
        document.getElementById("one").addEventListener("click", one);
        document.getElementById("two").addEventListener("click", two);
        document.getElementById("three").addEventListener("click", three);

        function one() {
            document.getElementById("slideimage").src = "C:\\Users\\Sakshi\\Desktop\\ONE-CLICK-PICK\\IMAGES\\slider1.jpeg";
        }

        function two() {
            document.getElementById("slideimage").src = "C:\\Users\\Sakshi\\Desktop\\ONE-CLICK-PICK\\IMAGES\\slider2.jpeg";
        }

        function three() {
            document.getElementById("slideimage").src = "C:\\Users\\Sakshi\\Desktop\\ONE-CLICK-PICK\\IMAGES\\slider 3.png";
        }
    </script>
</body>


</html>