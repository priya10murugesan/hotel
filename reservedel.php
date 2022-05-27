<?php 
include 'connect.php';

$id=$_GET['id'];
$sql="delete from reservation where 	reservation_id='$id'";


if(mysqli_query($con,$sql)){
  echo "Deleted  Records Successfully";
  header('Location:reservation.php');
}else{
  echo "Records Not Deleted" . mysqli_error($con);
}


?>
