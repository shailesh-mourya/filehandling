<?php 

include('config.php');
$name=$_POST["name"];
$email=$_POST["email"];
$username=$_POST["username"];
$pass=$_POST["pass"];
$sql="INSERT INTO `users` (`name`, `email`, `username`, `password`) VALUES ('$name', '$email', '$username', '$pass');";

$result=mysqli_query($conn,$sql);
if (!$result) {
    echo "retry again ";
}
else{
    echo "registration successful";
    header('Location:login.html');
}





?>