<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Room</title>
<style>
    body {
  background-image: url('room1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
.container{
    /* background-color:darkgrey; */
    width:350px;
    height:540px;
    color:white;
}

    </style>
<?php

include 'connect.php';
$id= $_GET['id'];
$sql="select * from room where room_id=$id";
echo $sql;
if($result=mysqli_query($con,$sql)){
    if($row=mysqli_fetch_array($result)){
$room_num=$row['room_num'];
$room_type=$row['room_type'];
$room_category=$row['room_category'];
$price=$row['price'];
$availabilty=$row['availabilty'];
}else{
    echo "error";
}
}else{
echo "error in update room". mysqli_error($con);
}
?>






</head>
<body>

<form action="roomuptuser.php" method="get" name="myform" onsubmit="return validation()">
    <div class="container">
       
        
    <div class="form">
       
    <div class="card-body">
          
        <div class="row">
              <div class="form-group">
                  <div class="col">
                      <label> ROOM NUMBER</label>
                
                  
                      <input type="number" name="room_num" value="<?php echo $room_num; ?>">
                  </div> 

          </div>
       </div>
</div>

        <div class="card-body">
          <div class="row">
              <div class="form-group">
                  <div class="col">
                      <label>ROOM TYPE</label><br>
                  
                      <select name="room_type" value="<?php echo $room_type; ?>">
                          <option>AC</option>
                          <option >NON AC</option>
                      </select>
                  </div> 
              </div>
           </div>
        </div>
        
        
        <div class="card-body">
          <div class="row">
              <div class="form-group">
                  <div class="col">
                      <label>ROOM CATEGORY</label><br>
                  
                      <select name="room_category" value="<?php echo $room_category; ?>">
                          <option>Delux Room</option>
                          <option> Single Room</option>
                          <option> Twin Bed Room</option>
                          <option> Family Room</option>
                     </select>
                  </div> 
              </div>
           </div>
        </div>

          
          <div class="card-body">

          <div class="row">
              <div class="form-row">
                  <div class="col">
                      <label>PRICE</label>
                    
                      <br>
                      <input type="number" name="price" value="<?php echo $price; ?>">
                      </div>
            </div>
        </div>
    </div>



       <div class="card-body">
          <div class="row">
              <div class="form-row">
                  <div class="col">
                      <label>AVAILABILTY</label><br>
                      <select name="availabilty" value="<?php echo $availabilty; ?>">
                          <option>Available</option>
                          <option>Not Available</option>

                      </select>
                  </div>
              </div>
            </div>
       
              <button type="submit" class="btn btn-primary" style="width:200px;margin-top:20px;margin-left:0px;">UPDATE </button>

          </div>
          <input type="hidden" name="id" value="<?php echo $id; ?>">
    
    </form>
    <script>


      

    </script>

</body>
</html>