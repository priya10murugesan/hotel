
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reservation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .container-fluid{
    border:1px solid black;
    width:100%;
    height:70px;
    background-color:lightgray;
    

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
     body {
       background-image: url('room4.jpg');
       background-repeat: no-repeat;
       background-attachment: fixed;
       background-size: cover;
       /* height: 50%; */
       /* width:100%; */

/* Center and scale the image nicely */
background-position: center;
    
       
}
.container{
    color:black;
}
.form{
    color:black;
}

h5{
        padding-left:550px;
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
    
        <form action="reserve.php" method="" >
        <h5>RESERVATION PAGE</h5>
        <div class="container">
        <div class="form">
         <?php  session_start();
            if(isset($_SESSION['username'],$_SESSION['role'])){
          include 'connect.php';
          $sql="select * from reservation";
          echo "Welcome".$_SESSION['username'];
            // if($_SESSION['role']=='A'){
               echo '<button><a href="reserve.php">ADD </a></button>';
            // }
          $i=1;
          if($res=mysqli_query($con,$sql)){
              if(mysqli_num_rows($res)>0){
                echo "<table class='table table-bordered text-center'  border='2'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>  RESERVATION ID </th>";
                echo "<th> ROOM ID</th>";
                echo "<th> CUSTOMER NAME </th>";
                echo "<th>DATE IN</th>";
                echo "<th>DATE OUT</th>";
                echo "<th>COST </th>";
                echo "<th >STATUS</th>";
                echo "<th >BOOKING ID</th>";
                echo "<th colspan='3'>ACTION</th>";
                echo "</tr>";
                echo "</thead>";
                while($row=mysqli_fetch_array($res)){
                    echo "<tbody>";
                    echo "<tr>";
                    $id=$row['reservation_id'];
                    echo "<td>".$row['reservation_id']."</td>";
                    echo "<td>".$row['room_id']."</td>";
                    echo "<td>".$row['cust_name']."</td>";
                    echo "<td>".$row['date_in']."</td>";
                    echo "<td>".$row['date_out']."</td>";
                    echo "<td>".$row['cost']."</td>";
                    echo "<td>".$row['status']."</td>";
                    echo "<td>".$row['booking_id']."</td>";
                    echo "<td><a href='reservationupt.php?id=".$id."'<i class='fa fa-edit' style='color:red;'>UPDATE</i></a> </td>";
                    echo "<td><a href='reserveview.php?id=".$id."'<i class='fa fa-eye' style='color:red;'>VIEW</i></a> </td>";
                    echo "<td><a href='reservedel.php?id=".$id."'<i class='fa fa-trash'>DELETE</i></a> </td>";
                    
                    }


         }
                 echo "</tr>";
                 echo  "</tbody>";
                 echo "</table>";
                 echo  "<button><a href='logout.php'>LOGOUT</a></button>";     

              }
          }
            //  session_destroy();


        


?>
        </div>
        </div>
     </form>
        </div>
</body>
</html>
