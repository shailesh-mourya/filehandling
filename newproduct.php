<?php 

include('config.php');

$product_name=$_POST["product_name"];
$price=$_POST["price"];
$sell_price=$_POST["sell_price"];
$file=$_FILES['image']['name'];


$target_dir="products/";
$target_name=$target_dir.basename($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'],$target_name);

$sql="INSERT INTO `products` ( `product_name`, `price`, `sell_price`, `image`) VALUES ( '$product_name', '$price', '$sell_price', '$file');";

$result=mysqli_query($conn,$sql);








?>