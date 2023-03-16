<?php
session_start();
$totals =0;
if(isset($_POST['add'])){ 
if(!empty($_SESSION['cart'])){
foreach($_SESSION['cart'] as $key => $value){
 
  $total = $value['Price'] * $value['quantity'];
  $totals =$totals + $total;
 echo " <tr>
 <td>$key</td>
  <td>$value[Item_Name]</td>
  <td>$value[Price]</td>
  <td>$value[quantity]</td>
 <td> $total </td>

 </tr>
  "; 

}
}else{
    echo "session is empty";
}
}else{
    echo "not post";

}  ?>