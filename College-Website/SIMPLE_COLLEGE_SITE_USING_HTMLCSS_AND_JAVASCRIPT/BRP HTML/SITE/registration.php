<?php

session_start();
$con=mysqli_connect('localhost','root');
if($con){
    echo" connection successful";
}
else{
    echo" no connection";
}

mysqli_select_db($con,'sessionpractical');

$email=$_POST['emailid'];
$name = $_POST['username'];
$pass = $_POST['password'];

$q="select * from signup where  email='$email' &&username='$name' && password='$pass'   ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

if($num==1){
    $_SESSION['username']=$name;
    header('location:signup.php');
}
else{
    header('location:login.php');
}

$qy=" insert into signup(email,username,password) values('$email','$name','$pass' )";
mysqli_query($con,$qy);

echo "good";

?>