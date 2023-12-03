<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo"connection successful";
}else{
    echo"no connection";
}

mysqli_select_db($con, 'lamborghini');
 
$fname = $_POST['fname'];
$password = $_POST['password'];

$loquery = "select * from members where fname='$fname' && password = '$password'";
$logquery = mysqli_query($con,$loquery);
$check = mysqli_num_rows($logquery);

if($check == 1){
    echo"login successful";
    header('location:index.php');
}else{
    echo"incorect username or password";
   
}

?>