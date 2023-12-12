<?php 

include('config.php');
$username=$_POST["username"];
$pass=$_POST["pass"];

$sql="SELECT * FROM `users` WHERE `username`='$username' AND `password`='$pass';";
$result=mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0) {
    echo "login successful";
    header("Location:index.html");
}
else{
    echo "invalid username and password";
}




?>