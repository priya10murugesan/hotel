
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
    color:white;
}
.form{
    color:white;
}
    </style>
</head>
<body>
    
        <form >
        <div class="container">
        <div class="form">
            <!-- <button>ADD ROOM</button> -->
         <?php  
        //  session_start();
            // if(isset($_SESSION['username'],$_SESSION['role'])){
          include 'connect.php';
          $id=$_GET['id'];
          $sql="select * from room where room_id='$id'";
          $sql1="select GETDATE()";
        //   echo "Welcome".$_SESSION['username'];
            // if($_SESSION['role']=='A'){
            //    echo '<button><a href="roomadd.php">ADD ROOM</a></button>';
            // }
          $i=1;
          if($res=mysqli_query($con,$sql)){
              if(mysqli_num_rows($res)>0){
                echo "<table class='table table-bordered text-center'  border='2'>";
                echo "<thead>";
                echo "<tr>";
                // echo "<th>ROOM ID</th>";
                echo "<th> ROOM NUM </th>";
                echo "<th> ROOM TYPE</th>";
                echo "<th> ROOM CATEGORY</th>";
                echo "<th>PRICE</th>";
                echo "<th>AVAILABILTY</th>";
                echo "<th>CREATION</th>";
                echo "</tr>";
                echo "</thead>";
                while($row=mysqli_fetch_array($res)){
                    echo "<tbody>";
                    echo "<tr>";
                    $id=$row['room_id'];
                    // echo "<td>$i</td>";
                    // echo "<td>".$row['room_id']."</td>";
                    echo "<td>".$row['room_num']."</td>";
                    echo "<td>".$row['room_type']."</td>";
                    echo "<td>".$row['room_category']."</td>";
                    echo "<td>".$row['price']."</td>";
                    echo "<td>".$row['availabilty']."</td>";
                    echo "<td>".$row['creation']."</td>";

                    // echo "<td><a href='roomupt.php?id=".$id."'<i class='fa fa-edit' style='color:red;'>UPDATE</i></a> </td>";
                    // echo "<td><a href='roomview.php?id=".$id."'<i class='fa fa-eye' style='color:red;'>VIEW</i></a> </td>";
                    // if($_SESSION['role']=='A'){
                        // echo "<td>". $_SESSION['role'].  "</td>";
                   
                        // echo "<td><a href='roomdel.php?email=".$id."'<i class='fa fa-trash'>DELETE</i></a> </td>";
                    }

                    // $i=$i+1;

         }
                 echo "</tr>";
                 echo  "</tbody>";
                 echo "</table>";
                 echo  "<button><a href='logout.php'>LOGOUT</a></button>";     

              }
        //   }
            //  session_destroy();


        


?>
<div class="btn">
             <button class="btn btn-dark"><a href="room.php">Go Back</a></button>
         </div>
        </div>
        </div>
     </form>

</body>
</html>
