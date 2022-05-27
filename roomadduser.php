<?php
include 'connect.php';
// $id=$_POST['id'];
$room_num=$_POST['room_num'];
$room_type=$_POST['room_type'];
$room_category=$_POST['room_category'];
$price=$_POST['price'];
$availabilty=$_POST['availabilty'];

$sql="insert into room(room_num,room_type,room_category,price,availabilty) 
values('$room_num','$room_type','$room_category','$price','$availabilty')";
echo "$sql";
  if(mysqli_query($con,$sql)){
     echo "record inserted successfully";
     header("location:room.php");
     
 }else{
      echo "error in insert records" . mysqli_error($con);
  }


?>