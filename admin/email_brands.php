<?php
include 'h.php';
$_SESSION['active'] = 'email_brands';
include 'topnav.php';
include 'aside.php';
?>
<div class="content-wrapper">
<section class="content">
<div class="container-fluid">
<div class="col-md-10">
<form method="POST" action="../model/email_vendor.php">

<div class="card">
  <div class="card-header text-right">
<button class="btn btn-primary">Add email</button>
  </div>
<div class="card-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
<th><input type="button"  class = "btn btn-info" value="check all" onclick="selectAll()">
<input type="button" class = "btn btn-info"value="Un check all" onclick="selectAll2()"></th>
<th>Id</th>
<th>Name</th>
<th>email</th>
</thead>
<?php 
$sql = "select * from mail_list";
$res = mysqli_query($conn,$sql);
while($row = $res->fetch_assoc()){
?>
<tr>
<td>
<input class="checkbox"  type="checkbox" name="acs[]" checked="" value="<?php echo $row['id'] ?>"></td>
<td><?php echo "cus".$row['id']?></td>
<td><?php echo $row['name']?></td>
<td><?php echo $row['email']?></td>

</tr>
<?php } ?>
</table>

<div class="form-group">
<label>Message</label>
<textarea required name="message" class="form-control">
</textarea>
</div>
</div>
<div class="card-footer">
  <p>The message will be sent to the emails you have checked in the above table</p>
<button type="button" class="btn btn-primary" 
data-toggle="modal" data-target="#exampleModal">Send email</button>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Send email</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close" id="click">
  <span aria-hidden="true">&times;</span>
</button>
  </div>
  <div class="modal-body">
You are about to send an email.
  </div>
  <div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button  type = "submit" class="btn btn-primary">Send email</button>
  </div>
</div>
  </div>
</div>
</form>
</div>
</div>
</section>
</div>
<script type="text/javascript">
function selectAll(){
var items = document.getElementsByName('acs[]');
for (var i = 0; i < items.length; i++){
	if (items[i].type == 'checkbox') {
		items[i].checked = true;
	}

}
}

function selectAll2(){
var items = document.getElementsByName('acs[]');
for (var i = 0; i < items.length; i++){
	if (items[i].type == 'checkbox') {
		items[i].checked = false;
	}

}
}

</script>
<?php include 'footer.php' ?>