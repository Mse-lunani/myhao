<?php 
include 'controller/config.php';
$sql = "INSERT INTO `customers`( `identification`, `name`, `email`, `password`) VALUES
('$_POST[id]','$_POST[name]','$_POST[email]','$_POST[password]');
";
if(mysqli_query($conn,$sql)){
$sql = "select * from customers order by id desc";
$row = mysqli_query($conn,$sql)->fetch_assoc();
$_SESSION['customer'] = $row['id'];
header("location:index.php");
}else{
	header("location:web/?already");
}
?>