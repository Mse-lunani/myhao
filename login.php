<?php 
include 'controller/config.php';
$sql = "select * from customers where email = '$_POST[email]' and password = '$_POST[password]'";
$res = mysqli_query($conn,$sql);
if (mysqli_num_rows($res) > 0) {
	$row = $res->fetch_assoc();
	$_SESSION['customer'] = $row['id'];
 	header("location:index.php");
 }else{
 	header("location:web/?unlogin");
 }

?>