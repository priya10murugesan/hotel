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
</head>
<body>

    

<form action="reserveinsert.php" method="post" onsubmit="return validation()"  name="myform">
<div class="container">
    <div class="form">
        
        <div class="row">
            <div class="form-group">
                <label > ROOM_ID</label>
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
                <label>CUSTOMER NAME </label>
                <br>
                <?php
                include 'connect.php';
                $sql="select * from customer";

                echo "<select name='cust_name'>";
                echo "<option>ALL</option>";
                if($res=mysqli_query($con,$sql)){
                    if(mysqli_num_rows($res)>0){
                        while($row=mysqli_fetch_array($res)){

                            echo "<option>".$row['cust_name']."</option>";
                        }
                    }
                }

                echo "</select>";

                ?>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <label>  DATE IN </label><br>
                <input type="date" name="date_in" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label> DATE OUT  </label><br>
                <input type="date" name="date_out" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label>COST  </label><br>
                <input type="text" name="cost" required>
            </div>
        </div>
        <!-- <div class="row">
            <div class="form-group">
                <label>paymenttype </label><br>
               <select name="paymenttype"> 
                   <option>UPI</option>
                   <option>card</option>  
               </select>
            </div>
        </div> -->
        <div class="row">
            <div class="form-group">
                <label>STATUS  </label><br>
                <input type="text" name="status" required>
            </div>
        </div>

        <br> <button type="submit" class="btn btn-primary">ADD RESERVATION </button>
           
     
    <script>
        function validation(){
            document.myform
        }

        </script>
</body>
</html>