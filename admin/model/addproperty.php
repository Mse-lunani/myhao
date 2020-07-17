<?php 
include '../../controller/config.php';
if (isset($_FILES["fileToUpload"]["name"]) && $_FILES["fileToUpload"]["name"]!='') {
	$target_dir = "../upload/";
	$name = basename($_FILES["fileToUpload"]["name"]);
	$tmpname = $_FILES["fileToUpload"]["tmp_name"];
	$extention = strtolower(substr($name, strpos($name, ".")+ 1));
	$filename = date("Ymjhis");
    $image_path =  $target_dir.$filename.".".$extention;
    $image = $filename.".".$extention;
move_uploaded_file($tmpname, $image_path);
$sql = "INSERT INTO `properties`(`city`, `nearest_landmark`, `details`, `price`, `progress`, `uid`, `image`, `name`)
values('$_POST[city]','$_POST[nearest_landmark]','$_POST[details]','$_POST[price]','$_POST[progress]','$_SESSION[user]','$image','$_POST[name]')
";
if (mysqli_query($conn,$sql)) {
header("location:../properties.php");
}
}else{
header("location:../../");
}

?>