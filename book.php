<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
      body{
          background-color: lightblue;
      }
        </style>
</head>
<body>
    
<?php
$cust_name=$_POST['cust_name'];
$room_type=$_POST['room_type'];
$room_category=$_POST['room_category'];
$date_in=$_POST['date_in'];
$date_out=$_POST['date_out'];
// $cost=$_POST['cost'];
$status="BOOKED";

$dStart = new DateTime($date_in);
$dEnd  = new DateTime($date_out);
   $dDiff = $dStart->diff($dEnd);
// echo "Check in date: ". $date_in;
// echo "<br>";
// echo "Check out Date ".$date_out;
// echo "<br>";
// echo "Total Days ";
$days = $dDiff->format('%r%a'); 
// echo $days ;
// echo "<br>";

//  echo "cost:".$cost;
// echo "<br>";
include 'connect.php';
 $selqry = "SELECT *  FROM `room` where room_type='".$room_type."' and room_category='".$room_category."'";
 if($res=mysqli_query($con,$selqry)){
     if(mysqli_num_rows($res)>0){
         while($row=mysqli_fetch_array($res)){
              $c=$days*$row['price'];
            //   echo $c;
         }
     }
 }
 
 
 $comb ="1234567890";
  $book=str_shuffle($comb);
  $booking=substr($book,0,6);
  echo "<br>";
//   echo $booking;
  $sql="insert into reservation(cust_name,date_in,date_out,cost,status,booking_id)
 values('$cust_name','$date_in','$date_out',$c,'$status',$booking)";

 if($result=mysqli_query($con,$sql)){
    echo "<h1 style='text-align:center;'>Booking Successfully</h1>";
    echo '<div class="card" style="width: 25rem; margin-left: 450px; margin-top:20px; background-color: lightyellow;">';
    echo '<div class="Booking Details">';
    echo '<h5 class="card-title">Check In Date:' .$date_in.'</h5>';
    echo '<h5 class="card-title">Check Out Date:' .$date_out.'</h5>';
    echo '<h5 class="card-title">Total Days:' .$days.'</h5>';
    echo '<h6 class="card-subtitle mb-2 text-muted">Total Amount:'.$c.'</h6>';
    echo '<h3>Booking Id:'.$booking.'</h3>';
    echo '<button class="btn btn-primary" style="margin-left:320px;"><a href="login.html" class="card-link" style="text-decoration:none; color:white;";>Home</a></button>
    </div>
  </div>';
  
 }else{
     echo "not inserted". mysqli_error($con);
   }
  
  $sql1=" SELECT * FROM customer
join reservation 
ON customer.cust_id = reservation.cust_id;"
 ?>


</div>
</body>
</html>