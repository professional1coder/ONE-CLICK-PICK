<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sign form</title>
  <link rel="stylesheet" href="style.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<!-- PHP CODE CONNECTION -->

<body>
  <div class="wrapper">
    <header>sign Form</header>
    <form method="post" action="./code.php">
    <div class="field user">
    <div class="input-area">
   
              <input type="text" placeholder="UserName" class="form-control" id="username" name="username">
              <i class="icon fas fa-user"></i>
              </div>
    </div>
      <div class="field email">
        <div class="input-area">
          <input type="email" placeholder="Email-id" class="form-control" id="Email-id" name="email">
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
      <div class="pass-txt"><a href="login.php">Already have an account</a></div>
          <a href="index.html"><input type="submit" value="submit" name="submit"></a>

    </form>
    

  </div>
</body>
 
</html>