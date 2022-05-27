<?php
   include 'connect.php';
   $id= $_GET['id'];

        $cust_name=$_POST['cust_name'];
        $gender=$_POST['gender'];
        $dob=$_POST['dob'];
        $mobile_number=$_POST['mobile_number'];
        $emailid=$_POST['emailid'];
        $city=$_POST['city'];
        $state=$_POST['state'];
      
   $sql="update customer set  cust_name='$cust_name',gender='$gender',dob='$dob',emailid='$emailid', city='$city', state='$state' where cust_id='$id'";
   echo $sql;  

   if(mysqli_query($con,$sql)){
    echo "Record is SUCCESSFULLY UPDATED";
    header('Location:customer.php');
   
}else{
    echo "Records Not Inserted" . mysqli_error($con);
}

?>