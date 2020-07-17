<?php 
include '../../controller/config.php';
$name = mysqli_real_escape_string($conn,$_POST['name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$sql = "INSERT into mail_list (name,email) values ('$name','$email')";
if(mysqli_query($conn,$sql)){
header("location:../email_maillist.php");
}
else{
header("location:../email_maillist.php?exists");
}
?>