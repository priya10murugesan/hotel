<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make reservation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .container{
        width:220px;
        height: 350px;
        padding: 50px;
        color:white;
    }
    body {
       background-image: url('way.jpg');
       background-repeat: no-repeat;
       background-attachment: fixed;
       background-size: cover;
       
background-position: center;
     }
    .row{
      padding:10px;
    }
</style>
</head>
<body>
    <form action="book.php" method="post">
        <div class="container">
            <div class="form">

            <div class="row">
                  <div class="form-group">
                    <label> CUSTOMER NAME</label><br>
                  
                    <select name='cust_name' id=''><option ></option>";
            <?php
                 include 'connect.php';
                $sql="select cust_name from customer";
                if($res=mysqli_query($con,$sql)){
                  if(mysqli_num_rows($res)>0){
                    while($row=mysqli_fetch_array($res)){
                           
                      echo "<option>".$row['cust_name']."</option>";
                    }
                  }
                }?>
                </select>
                  </div>
              </div>

              <div class="row">
                  <div class="form-group">
                    <label>ROOM TYPE</label><br>
                  
                    <select name="room_type"  >
                        <option>AC</option>
                        <option >NON AC</option>
                    </select>
                  </div>
              </div>

              <div class="row">
                <div class="form-group">
                    <label>ROOM CATEGORY</label><br>
                  
                    <select name="room_category" >
                        <option>Delux Room</option>
                        <option> Single Room</option>
                        <option> Twin Bed Room</option>
                        <option> Family Room</option>
                   </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label>DATE IN</label>
                    <input type="date" name="date_in" id="date_in">
                </div>
            </div>
            
            <div class="row">
                <div class="form-group">
                    <label>DATE OUT</label>
                    <input type="date" name="date_out" id="date_out">
                </div>
            </div><br>
           
           
             
                <button class="btn btn-primary" id="sub"
                        onclick="func()"
                        type="submit"> BOOK
                </button>
                <br><br>
                
            
           


            <button type="submit" class="btn btn-danger" ><a href="" style="color: azure;text-decoration: none;">CANCEL</a></button>




            </div>

        </div>
    </form>
    
   

 


       
</body>
</html>