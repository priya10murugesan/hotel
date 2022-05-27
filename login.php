<?php session_start();
include 'connect.php';
$username=$_POST['username'];
$password=$_POST['password'];

$dbusername=[''];
$dbpassword=[''];
$dbrole=[''];
$sql="select * from login where username='$username'";
echo $username;
echo $password;
echo $sql;
if($res=mysqli_query($con,$sql)){
    if(mysqli_num_rows($res)>0){
        while($row=mysqli_fetch_array($res)){
            $dbusername=$row['username'];
            $dbpassword=$row['password'];
            $dbrole=$row['role'];
        }
        if($password==$dbpassword){
            $_SESSION['username']=$dbusername;
            $_SESSION['role']=$dbrole;
           // echo "Welcome to login page";
            header('Location:usercustomer.php');
        }else{
            echo "password not same";
        }if($_SESSION['role']=='A'){
           echo "welcome to dsahboard";
           header('Location:dashboard.php');
        }
    }else{
        echo "No matching record";
    }
}else{
    echo "No data";
}
mysqli_close($con);

?>