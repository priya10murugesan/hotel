<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
.container-fluid{
    border:1px solid black;
    width:100%;
    height:70px;
    

}
.nav{
padding:10px;
margin-left:800px;
padding-left:0px;


}
.navbar a{
    
    text-decoration:none;
    color:blue;
    padding:10px;
}
.first{
    border:1px solid blue;
    width:200px;
    height:200px;
    /* background-color:lightblue; */
    margin-top:200px;
    margin-left:300px;
    padding-left: 20px;

}
.second{
    border:1px solid blue;
    width:200px;
    height:200px;
    /* background-color:skyblue; */
    margin-left:600px;
    margin-top:-200px;
    padding-left: 20px;
    
}
.third{
    border:1px solid blue;
    width:200px;
    height:200px;
    /* background-color:lightblue; */
    margin-left:900px;
    margin-top:-200px;
    padding-left: 20px;
    
}
body {
       background-image: url('img2.jpg');
       background-repeat: no-repeat;
       background-attachment: fixed;
       background-size: cover;
       font-family: "Audiowide";
background-position: center;
}
 


        </style>
</head>
<body>
    <div class="container-fluid">
      <div class="nav">
          <nav class="navbar navbar-expand-lg">
              <a href="dashboard.php">HOME</a>
              <a href="room.php">ROOM</a>
              <a href="customer.php">CUSTOMER</a>
              <a href="reservation.php">RESERVATION</a>
              <a href="logout.php">LOGOUT</a>
</nav>
 </div>

</div>
<div class="first">
<i class="fa fa-bars" style="font-size:36px;color:blue;padding-left:80px; padding-top:30px;"></i>
        
        <h5 style="color:black;">ROOM </h5>
        <h6 style="color:brown;">Count of rooms </h6>
        <?php
          include 'connect.php';

          $sql="SELECT  count(*) as total from room ";
          //echo $sql;
          
           if ($res= mysqli_query($con, $sql)) {
               
                   if($row=mysqli_fetch_assoc($res)){
                   echo "count:".$row['total'];
          
        }else{
              echo "error".mysqli_error($con);
          }
        }
        
    
    ?>

</div>

<div class="second">
<i class="fa fa-bars" style="font-size:36px;color:blue;padding-left:80px; padding-top:30px;"></i>
        
        <h5 style="color:black;">CUSTOMER </h5>
        <h6 style="color:brown;">Count of customer</h6>
        <?php
          include 'connect.php';
         
          $sql="SELECT  count(*) as total from customer ";
          //echo $sql;
          
           if ($res= mysqli_query($con, $sql)) {
               
                   if($row=mysqli_fetch_assoc($res)){
                   echo "count:".$row['total'];
          
        }else{
              echo "error".mysqli_error($con);
          }
        }
        ?>
</div>
<div class="third">
<i class="fa fa-bars" style="font-size:36px;color:blue;padding-left:80px; padding-top:30px;"></i>
        
        <h5 style="color:black;">RESERVATION </h5>
        <h6 style="color:brown;">Count of reservation</h6>
        <?php
          include 'connect.php';
         
          $sql="SELECT  count(*) as total from RESERVATION ";
          //echo $sql;
          
           if ($res= mysqli_query($con, $sql)) {
               
                   if($row=mysqli_fetch_assoc($res)){
                   echo "count:".$row['total'];
          
        }else{
              echo "error".mysqli_error($con);
          }
        }
        ?>
</div>




</div>



</body>
</html>