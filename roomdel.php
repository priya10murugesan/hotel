<?php 
include 'connect.php';

$id=$_GET['email'];
$sql="delete from room where room_id='$id'";


if(mysqli_query($con,$sql)){
  echo "Deleted  Records Successfully";
  header('Location:room.php');
}else{
  echo "Records Not Deleted" . mysqli_error($con);
}


?>
