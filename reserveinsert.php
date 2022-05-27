<?php
include 'connect.php';
$room_id=$_POST['room_id'];
$cust_name=$_POST['cust_name'];
$date_in=$_POST['date_in'];
$date_out=$_POST['date_out'];
$cost=$_POST['cost'];
// $paymenttype=$_POST['paymenttype'];
$status=$_POST['status'];

$sql="insert into reservation(room_id,cust_name,date_in,date_out,cost,status)
 values($room_id,'$cust_name','$date_in','$date_out','$cost','$status')";
echo $sql;
if($res=mysqli_query($con,$sql)){
   echo "Record inserted successfully";
   header("location:reservation.php");
}else{
    echo "error".mysqli_error($con);
}

?>