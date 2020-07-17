<?php 
include '../../controller/config.php';
if (isset($_POST['email'])) {
$sql = "select * from users where email = '$_POST[email]'";
$res = mysqli_query($conn,$sql);
if (mysqli_num_rows($res) == 1) {
$row = $res->fetch_assoc();
$p = $row['password'];
if ($p == $_POST['password']) {
$_SESSION['type'] = $row['type'];
$_SESSION['user'] = $row['id'];
	header("location:../dashboard.php");
}else{
header("location:../login.php?unsuc");
}

}else{
header("location:../login.php?unsuc");
}
}else{
	header("location:../../");
}

?>