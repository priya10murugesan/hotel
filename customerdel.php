<?php 
include 'connect.php';

$id=$_GET['email'];
$sql="delete from customer where cust_id='$id'";


if(mysqli_query($con,$sql)){
  echo "Deleted  Records Successfully";
  header('Location:customer.php');
}else{
  echo "Records Not Deleted" . mysqli_error($con);
}


?>
