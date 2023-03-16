<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login form</title>
  <link rel="stylesheet" href="style.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>


<?php  

               ##### login connect code######

require("conf.php");

   
 if($_SERVER["REQUEST_METHOD"] == "POST") {
   
  
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $pass = mysqli_real_escape_string($conn,$_POST['password']); 
  
  $sql = "SELECT * FROM user WHERE email = '$email' and password = '$pass'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 
  
  $count = mysqli_num_rows($result);
  
  if($count == 1) {
    session_start();
     $_SESSION['email'] = $email;
     
     header("location: index.php");
  }else {
    echo "<script>alert('Login failed please  re-enter the details')</script>";
  }
}
?>

<body>
  <div class="wrapper">
    <header>Login Form</header>
    <form action = "" method = "post">
      <div class="field email">
        <div class="input-area">
          <input type="text" placeholder="Email-id" class="form-control" id="Email-id" name="email">
          <i class="icon fas fa-envelope"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Email can't be blank</div>
      </div>
      <div class="field password">
        <div class="input-area">
          <input type="password" placeholder="Password" class="form-control" id="Password" name="password">
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Password can't be blank</div>
      </div>
      <div class="pass-txt"><a href="#">Forgot password?</a></div>
      <div class="pass-txt"><a href="./register.php">Create an account?</a></div>
      <input type="submit" value="submit" />
    </form>
    <th>
    </th>
  </div>
</body>
 
</html>