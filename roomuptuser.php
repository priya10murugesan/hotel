<?php
   include 'connect.php';
   $id= $_GET['id'];

   $room_num=$_GET['room_num'];
   $room_type=$_GET['room_type'];
   $room_category=$_GET['room_category'];
   $price=$_GET['price'];
   $availabilty=$_GET['availabilty'];
      
   $sql="update room set  room_num='$room_num',room_type='$room_type',room_category='$room_category',price='$price' where room_id='$id'";
   echo $sql;  

   if(mysqli_query($con,$sql)){
    echo "Record is SUCCESSFULLY UPDATED";
    header('Location:room.php');
   
}else{
    echo "Records Not Inserted" . mysqli_error($con);
}

?>