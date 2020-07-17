<?php 
include 'h.php';
$_SESSION['active'] = 'dashboard';
include 'topnav.php';
include 'aside.php';
?>
<div class="content-wrapper">
<section class="content">
<div class="container-fluid">
<h1></h1>
<div class="row">
<?php if ($_SESSION['type'] == 'property_developer'): ?>
	

<div class="col-lg-3 col-6">
<!-- small card -->
<div class="small-box bg-info">
<div class="inner">
<?php 
$sql = "select count(id) as c from properties where uid = '$_SESSION[user]'";
$res = mysqli_query($conn,$sql)->fetch_assoc();

?>
<h3><?php echo $res['c'] ?> </h3>

<p>Properties</p>
</div>
<div class="icon">
<i class="fas fa-envelope"></i>
</div>
<a href="properties.php" class="small-box-footer">
More info <i class="fas fa-arrow-circle-right"></i>
</a>
</div>
</div>
<!-- ./col -->

<?php endif ?>
<?php if ($_SESSION['type'] == 'admin'): ?>
	

<div class="col-lg-3 col-6">
<!-- small card -->
<div class="small-box bg-info">
<div class="inner">
<?php 
$sql = "select count(id) as c from properties";
$res = mysqli_query($conn,$sql)->fetch_assoc();

?>
<h3><?php echo $res['c'] ?> </h3>

<p>Properties</p>
</div>
<div class="icon">
<i class="fas fa-envelope"></i>
</div>
<a href="properties2.php" class="small-box-footer">
More info <i class="fas fa-arrow-circle-right"></i>
</a>
</div>
</div>

<!-- ./col -->
<div class="col-lg-3 col-6">
<!-- small card -->
<div class="small-box bg-info">
<div class="inner">
<?php 
$sql = "select count(id) as c from customers";
$res = mysqli_query($conn,$sql)->fetch_assoc();

?>
<h3><?php echo $res['c'] ?> </h3>

<p>Public users</p>
</div>
<div class="icon">
<i class="fas fa-envelope"></i>
</div>
<a href="users.php" class="small-box-footer">
More info <i class="fas fa-arrow-circle-right"></i>
</a>
</div>
</div>
<?php endif ?>
</div>

</div>
</section>
</div>
<?php include 'footer.php';