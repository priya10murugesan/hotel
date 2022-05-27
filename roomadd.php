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


</head>
<body>

<form action="roomadduser.php" method="post" name="myform" onsubmit="return validation()">
    <div class="container">
       
        
    <div class="form">
       
    <div class="card-body">
          
        <div class="row">
              <div class="form-group">
                  <div class="col">
                      <label> ROOM NUMBER</label>
                      <input type="number" name="room_num">
                      <br>
                      <span id="alert" style="color: red;"></span>

                  </div> 

          </div>
       </div>
</div>

        <div class="card-body">
          <div class="row">
              <div class="form-group">
                  <div class="col">
                      <label>ROOM TYPE</label><br>
                  
                      <select name="room_type"  >
                          <option>AC</option>
                          <option >NON AC</option>
                      </select>
                      <span id="alert1" style="color: red;"></span>

                  </div> 
              </div>
           </div>
        </div>
        
        
        <div class="card-body">
          <div class="row">
              <div class="form-group">
                  <div class="col">
                      <label>ROOM CATEGORY</label><br>
                  
                      <select name="room_category" >
                          <option>Delux Room</option>
                          <option> Single Room</option>
                          <option> Twin Bed Room</option>
                          <option> Family Room</option>
                     </select>
                     <span id="alert2" style="color: white;"></span>

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
                      <input type="number" name="price" >
                      <span id="alert3" style="color: red;"></span>

                      </div>
            </div>
        </div>
    </div>



       <div class="card-body">
          <div class="row">
              <div class="form-row">
                  <div class="col">
                      <label>AVAILABILTY</label><br>
                      <select name="availabilty" >
                          <option>Available</option>
                          <option>Not Available</option>

                      </select>
                      <span id="alert4" style="color: red;"></span>

                  </div>
              </div>
            </div>
       
              <button type="submit" class="btn btn-primary" style="width:200px;margin-top:20px;margin-left:0px;">ADD ROOM </button>

          
            


        


    </div>
    
    </form>
    <script>

         function validation()
         {
              var flag=true;
              if (document.myform.room_num.value==""){
              document.getElementById('alert').innerHTML="Please Enter roomnumber";
              myform.room_num.style.border="solid 1px red";
              myform.room_num.focus();
              flag=false;
          }else{
               document.getElementById('alert').innerHTML="";
               myform.room_num.style.border="solid 1px green";
               flag=true;
          } if (document.myform.room_type.value==""){
              document.getElementById('alert1').innerHTML="Please Enter room type";
              myform.room_type.style.border="solid 1px red";
              myform.room_type.focus();
              flag=false;
          }else{
               document.getElementById('alert1').innerHTML="";
               myform.room_type.style.border="solid 1px green";
               flag=true;
          }
          if (document.myform.price.value==""){
              document.getElementById('alert3').innerHTML="Please Enter Price ";
              myform.price.style.border="solid 1px red";
              myform.price.focus();
              flag=false;
          }else{
               document.getElementById('alert1').innerHTML="";
               myform.price.style.border="solid 1px green";
               flag=true;
          }
          if(flag==false){
               return false;
          }else{
               return true;
          }
         }
      

    </script>

</body>
</html>