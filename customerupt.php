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
$sql="select * from customer where cust_id=$id";
echo $sql;
if($result=mysqli_query($con,$sql)){
    if($row=mysqli_fetch_array($result)){
        $cust_name=$row['cust_name'];
        $gender=$row['gender'];
        $dob=$row['dob'];
        $mobile_number=$row['mobile_number'];
        $emailid=$row['emailid'];
        $city=$row['city'];
        $state=$row['state'];
}else{
    echo "error";
}
}else{
echo "error in update customer". mysqli_error($con);
}
?>
</head>
<body>


<form action="customeruptuser.php" method="post" name="myform" onsubmit="return validation()">
    <div class="container">
       
        
    <div class="form">
       
    <div class="card-body">
          
        <div class="row">
              <div class="form-group">
                  <div class="col">
                      <label>CUSTOMER NAME</label>
                
                  
                      <input type="text" name="cust_name" value="<?php echo $cust_name; ?>" >
                  </div> 

          </div>
       </div>
</div>

        <div class="card-body">
          <div class="row">
              <div class="form-group">
                  <div class="col">
                      <label>GENDER </label><br>
                    <input type="radio" name="gender" value="Male" value="<?php echo $gender; ?>">Male
                    <input type="radio" name="gender" value="FEMALE" value="<?php echo $gender; ?>">FEMALE
                  </div> 
              </div>
           </div>
        </div>
        
        
        <div class="card-body">
          <div class="row">
              <div class="form-group">
                  <div class="col">
                      <label>DOB </label><br>
                      <input type="date" name="dob" value="<?php echo $dob; ?>">
                  </div> 
              </div>
           </div>
        </div>

          
          <div class="card-body">

          <div class="row">
              <div class="form-row">
                  <div class="col">
                      <label>MOBILE NUMBER</label>
                    
                      <br>
                      <input type="number" name="mobile_number" value="<?php echo $mobile_number; ?>">
                      </div>
            </div>
        </div>
    </div>



       <div class="card-body">
          <div class="row">
              <div class="form-row">
                  <div class="col">
                      <label>EMAILID</label><br>
                     <input type="email" name="emailid" value="<?php echo $emailid; ?>">
                  </div>
              </div>
            </div>


            <div class="card-body">
          <div class="row">
              <div class="form-row">
                  <div class="col">
                      <label>CITY</label><br>
                     <input type="text" name="city" value="<?php echo $city; ?>">
                  </div>
              </div>
            </div>
            <div class="card-body">
          <div class="row">
              <div class="form-row">
                  <div class="col">
                      <label>STATE</label><br>
                     <input type="text" name="state" value="<?php echo $state; ?>">
                  </div>
              </div>
            </div>
       
              <button type="submit" class="btn btn-primary" style="width:200px;margin-top:20px;margin-left:0px;">UPDATE </button>

          
            


        


    </div>
    
    </form>
    <script>


      

    </script>

</body>
</html>