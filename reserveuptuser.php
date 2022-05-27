<?php
   include 'connect.php';
   $reservation_id=$_POST['reservation_id'];

   $room_id=$_POST['room_id'];
   $cust_name=$_POST['cust_name'];
   $date_in=$_POST['date_in'];
   $date_out=$_POST['date_out'];
   $cost=$_POST['cost'];
   $status=$_POST['status'];
      
   $sql="update reservation set room_id=$room_id,cust_name='$cust_name',date_in='$date_in',date_out='$date_out', cost=$cost, status='$status' where reservation_id=$reservation_id";
   echo $sql;  

   if(mysqli_query($con,$sql)){
    echo "Record is SUCCESSFULLY UPDATED";
    header('Location:reservation.php');
   
}else{
    echo "Records Not Inserted" . mysqli_error($con);
}

?>