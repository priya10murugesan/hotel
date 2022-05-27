<?php
include 'connect.php';
// $id=$_POST['id'];
$cust_name=$_POST['cust_name'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$mobile_number=$_POST['mobile_number'];
$emailid=$_POST['emailid'];
$city=$_POST['city'];
$state=$_POST['state'];

$sql="insert into customer(cust_name,gender,dob,mobile_number,emailid,city,state) 
values('$cust_name','$gender','$dob',$mobile_number,'$emailid','$city','$state')";
echo "$sql";
  if(mysqli_query($con,$sql)){
     echo "record inserted successfully";
     header("location:customer.php");
     
 }else{
      echo "error in insert records" . mysqli_error($con);
  }


?>