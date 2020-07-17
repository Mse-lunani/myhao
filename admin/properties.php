<?php 
include 'h.php';
if ($_SESSION['type']!='property_developer') {
	exit();
}
$_SESSION['active'] = 'properties';
include 'topnav.php';
include 'aside.php';
?>
<div class="content-wrapper">
<section class="content">
<div class="container-fluid">
<div class="col-md-10">


<div class="card">
  <div class="card-header text-right">
<button class="btn btn-primary" data-toggle="modal" data-target="#add">Add property</button>
  </div>
<div class="card-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
<th>Id</th>
<th>Name</th>
<th>price</th>
<th>action</th>

</thead>
<?php 
$sql = "select * from properties where uid = '$_SESSION[user]'";
$res = mysqli_query($conn,$sql);
while($row = $res->fetch_assoc()){
?>
<tr>
<td><?php echo "pro".$row['id']?></td>
<td><?php echo $row['name']?></td>
<td><?php echo $row['price']?></td>
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