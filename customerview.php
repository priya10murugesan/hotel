<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customer</title>
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
       background-image: url('.jpg');
       background-repeat: no-repeat;
       background-attachment: fixed;
       background-size: cover;
       /* height: 50%; */
       /* width:100%; */

/* Center and scale the image nicely */
background-position: center;
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
              <a href="#">HOME</a>
              <a href="room.php">ROOM</a>
              <a href="customer.php">CUSTOMER</a>
              <a href="reservation.php">RESERVATION</a>
              <a href="logout.php">LOGOUT</a>
              </nav>
 </div>
    <form action="customeradd.php" method="post">
    <h5>CUSTOMER PAGE</h5>
    <div class="container">
        
        <!-- <button >ADD CUSTOMER</button> -->
        
        <div>
         <?php  
        //   session_start();
            // if(isset($_SESSION['username'],$_SESSION['role'])){
          include 'connect.php';
          $id=$_GET['id'];
          $sql="select * from customer where cust_id='$id'";
          $sql1="select GETDATE()";
        //   echo "Welcome".$_SESSION['username'];
            // if($_SESSION['role']=='A'){
               echo '<button><a href="customeradd.php">ADD CUSTOMER</a></button>';
            // }
          $i=1;
          if($res=mysqli_query($con,$sql)){
              if(mysqli_num_rows($res)>0){
                echo "<table class='table table-bordered text-center'  border='2'>";
                echo "<thead>";
                echo "<tr>";
                // echo "<th>#</th>";
                echo "<th> CUSTOMER ID </th>";
                echo "<th>CUSTOMER NAME</th>";
                echo "<th>GENDER</th>";
                echo "<th>DOB</th>";
                echo "<th>MOBILE NUMBER</th>";
                echo "<th>EMAIL ID</th>";
                echo "<th>CITY</th>";
                echo "<th>STATE</th>";
                echo "<th>CREATION</th>";

                echo "</tr>";
                echo "</thead>";
                while($row=mysqli_fetch_array($res)){
                    echo "<tbody>";
                    echo "<tr>";
                    $id=$row['cust_id'];
                    // echo "<td>$i</td>";
                    echo "<td>".$row['cust_id']."</td>";
                    echo "<td>".$row['cust_name']."</td>";
                    echo "<td>".$row['gender']."</td>";
                    echo "<td>".$row['dob']."</td>";
                    echo "<td>".$row['mobile_number']."</td>";
                    echo "<td>".$row['emailid']."</td>";
                    echo "<td>".$row['city']."</td>";
                    echo "<td>".$row['state']."</td>";
                    echo "<td>".$row['creation']."</td>";
                    // $i=$i+1;
                    // echo "<td><a href='customerupt.php?id=".$id."'<i class='fa fa-edit' style='color:red;'>UPDATE</i></a> </td>";
                    // echo "<td><a href='customerview.php?id=".$id."'<i class='fa fa-eye' style='color:red;'>VIEW</i></a> </td>";
                    // echo "<td><a href='customerdel.php?email=".$id."'<i class='fa fa-trash'>DELETE</i></a> </td>";
       

         }
                 echo "</tr>";
                 echo  "</tbody>";
                 echo "</table>";



        
            }
          }

        // }


?>


        </div>
</body>
</html>