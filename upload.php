<!DOCTYPE html>
<html>
    <head>
        <title></title>

        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
    <h1 class="text-center text-white bg-dark">register with profile</h1>
    <br>
    <div class="table-responsive">
    <table class=" table table-bordered table-stripped table-hover">
         <thead>
            <th>Id</th>
            <th>Username</th>
            <th>Profile Pic</th>
         </thead>

         <tbody>
            <?php
            $con =mysqli_connect('localhost','root');
            mysqli_select_db($con,'displayupload');

            if(isset($_POST['submit'])){
                $username=$_POST['username'];
                $files=$_FILES['file'];
                print_r($username);
                echo"<br>";
                //print_r($files);

                $filename = $files['name'];
                $fileerror=$files['error'];
                $filetmp=$files['tmp_name'];

                $fileext = explode('.',$filename);
                $filecheck =strtolower(end($fileext));

                $fileextstored = array('png','jpg','jpeg','webp','jfif');

                if(in_array($filecheck,$fileextstored)){

                    $destinationfile='upload/'.$filename;
                    move_uploaded_file($filetmp,$destinationfile);

                    $q="INSERT INTO `womenslower`( `username`, `image`) VALUES ('$username','$destinationfile')";

                    $query= mysqli_query($con,$q);
                }

            
             


            }
            ?>
 </tbody>

</table>
</div>
</body>
</html>