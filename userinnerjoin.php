<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>reservation user</title>
</head>
<body>
    <form>
    <?php
    include 'connect.php';
    $sql="select * from reservation
    inner join room on reservation.room_id = room.room_id
    where cust_id = cust_id";

    if($res=mysqli_query($con,$sql)){
        if(mysqli_num_rows($res)>0){
            echo "<table table class='table table-bordered text-center'  border='2'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>cust_id</th>";
            echo "<th> date_in</th>";
            echo "<th>date_out</th>";
            echo "<th>price</th>";
            echo "<th>status</th>";
            echo "</tr>";
            echo "</thead>";
            while($row=mysqli_fetch_array($res)){
                echo "<tbody>";$a=$row['price']*5;
                echo "<tr>";
                echo "<td>".$row ['cust_id']."</td>";
                echo "<td>".$row['date_in']."</td>";
                echo "<td>".$row['date_out']."</td>";
                echo "<td>".$a."</td>";
                echo "<td>".$row['status']."</td>";
                
                
            }
            echo "</tr>";
            echo "</tbody>";
            echo "</table>";
        }
    }
    ?>
    </form>
</body>
</html>