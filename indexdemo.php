<!DOCTYPE html>
<html lang="en">
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<style>
    .select2-container .select2-selection--single{
    height:54px !important;
    width: 100px;
}
.select2-container--default .select2-selection--single{
         border: 1px solid #ccc !important; 
     border-radius: 0px !important; 
     
}


</style>
<body>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <table border="0" width="100%" bgcolor="#85b878">
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
    
</body>
</html>