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
         .container{
            border:2px solid black;
            width:300px;
            height:450px;
            padding:20px;
        }
        </style>
<?php

include 'connect.php';
$id= $_GET['id'];
$sql="select * from reservation where reservation_id=$id";
echo $sql;
if($result=mysqli_query($con,$sql)){
    if($row=mysqli_fetch_array($result)){
        $room_id=$row['room_id'];
        $cust_name=$row['cust_name'];
        $date_in=$row['date_in'];
        $date_out=$row['date_out'];
        $cost=$row['cost'];
        $status=$row['status'];
}else{
    echo "error";
}
}else{
echo "error in update room". mysqli_error($con);
}
?>

</head>
<body>

    

<form action="reserveuptuser.php" method="post" onsubmit="return validation()"  name="myform">
<div class="container">
    <div class="form">
        
    <div class="row">
            <div class="form-group">
                <label>ROOM ID </label>
                <br>
                <?php
                include 'connect.php';
                $sql="select * from room";

                echo "<select name='room_id'>";
                echo "<option>ALL</option>";
                if($res=mysqli_query($con,$sql)){
                    if(mysqli_num_rows($res)>0){
                        while($row=mysqli_fetch_array($res)){

                            echo "<option>".$row['room_id']."</option>";
                        }
                    }
                }

                echo "</select>";

                ?>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <label >CUSTOMER NAME </label>
                <br>
                <select name="cust_name">
                  <option > 
                  <?php echo $cust_name; ?>
                  </option>
               </select>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <label>  DATE IN </label><br>
                <input type="date" name="date_in" required value="<?php echo $date_in; ?>" >
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label> DATE OUT  </label><br>
                <input type="date" name="date_out" required value="<?php echo $date_out; ?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label>COST  </label><br>
                <input type="text" name="cost" required value="<?php echo $cost; ?>">
            </div>
        </div>
        
        <div class="row">
            <div class="form-group">
                <label>STATUS  </label><br>
                <input type="text" name="status" required value="<?php echo $status; ?>">
            </div>
        </div>
        <input type="hidden" name="reservation_id" value="<?php echo $id; ?>">

        <br> <button type="submit" class="btn btn-primary">UPDATE RESERVATION </button>
           
     
    

        </script>
</body>
</html>