<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo"connection successful";
}else{
    echo"no connection";
}

mysqli_select_db($con, 'lamborghini');

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$number = $_POST['number'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$query = "select * from members where email='$email'";
$squery = mysqli_query($con, $query);
$check = mysqli_num_rows($squery);

if($check > 0){
    echo"your email id already exist";

}else{
    $insertquery = "insert into members(fname, mname ,lname ,email ,number ,password ,cpassword) values('$fname', '$mname' ,'$lname' ,'$email' ,'$number' ,'$password' ,'$cpassword')";
    $iquery = mysqli_query($con,$insertquery);
    if($iquery){
        echo"data inserted";
        header('location:login.php');
    }else{
        echo"data not inserted";
    }
}

// 

?>