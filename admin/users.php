<?php 
include 'h.php';
if ($_SESSION['type']!='admin') {
	exit();
}
$_SESSION['active'] = 'users';
include 'topnav.php';
include 'aside.php';
?>
<div class="content-wrapper">
<section class="content">
<div class="container-fluid">
<div class="col-md-10">


<div class="card">
   <div class="card-header text-left">
<h3>Public users</h3>
  </div>
<div class="card-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>action</th>

</thead>
<?php 
$sql = "select * from customers";
$res = mysqli_query($conn,$sql);
while($row = $res->fetch_assoc()){
?>
<tr>
<td><?php echo $row['identification']?></td>
<td><?php echo $row['name']?></td>
<td><?php echo $row['email']?></td>
<td>
<button class="btn btn-primary">any action</button>
</td>
</tr>
<?php } ?>
</table>

</div></div>
</div>
</section>
</div>
<?php include 'footer.php' ?>