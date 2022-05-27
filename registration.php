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
    width:350px;
    height:540px;
    color:white;
}

    </style>


</head>
<body>

<form action="./registrationadd.php" method="post" name="myform" onsubmit="return validation()">
    <div class="container">
       
        
    <div class="form">
       
    <div class="card-body">
          
        <div class="row">
              <div class="form-group">
                  <div class="col">
                      <label>CUSTOMER NAME</label>
                
                  
                      <input type="text" name="cust_name" >
                  </div> 

          </div>
       </div>
</div>

        <div class="card-body">
          <div class="row">
              <div class="form-group">
                  <div class="col">
                      <label>GENDER </label><br>
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="FEMALE">FEMALE
                  </div> 
              </div>
           </div>
        </div>
        
        
        <div class="card-body">
          <div class="row">
              <div class="form-group">
                  <div class="col">
                      <label>DOB </label><br>
                      <input type="date" name="dob">
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
                      <input type="number" name="mobile_number" >
                      </div>
            </div>
        </div>
    </div>



       <div class="card-body">
          <div class="row">
              <div class="form-row">
                  <div class="col">
                      <label>EMAILID</label><br>
                     <input type="email" name="emailid">
                  </div>
              </div>
            </div>


            <div class="card-body">
          <div class="row">
              <div class="form-row">
                  <div class="col">
                      <label>CITY</label><br>
                     <input type="text" name="city">
                  </div>
              </div>
            </div>
            <div class="card-body">
          <div class="row">
              <div class="form-row">
                  <div class="col">
                      <label>STATE</label><br>
                     <input type="text" name="state">
                  </div>
              </div>
            </div>
       
              <button type="submit" class="btn btn-primary" style="width:200px;margin-top:20px;margin-left:0px;">REGISTER  </button>

          
            


        


    </div>
    
    </form>
    <script>


      

    </script>

</body>
</html>