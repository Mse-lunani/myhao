<div class="modal fade" id="suc">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Successful!!</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<p>Your email has been sent succesfullly</p>
</div>
<div class="modal-footer justify-content-between">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

</div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<div class="modal fade" id="unsuc">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Login Unsuccesful</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<p>email or password is incorrect</p>
</div>
<div class="modal-footer justify-content-between">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

</div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<div class="modal fade" id="add">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Add property form</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<form method="post" action="model/addproperty.php" enctype="multipart/form-data">
<div class="modal-body">
<div class="form-group">
<label>Name</label>
<input type="text" name="name" class="form-control" required>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>City</label>
<input type="text" name="city" class="form-control" required>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Nearest landmark</label>
<input type="text" name="nearest_landmark" class="form-control" required>
</div>
</div>
</div>
<div class="form-group">
<label>Details</label>
<textarea name="details" class="form-control" required>
</textarea>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Price</label>
<input type="number" name = "price" class="form-control" required>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Progress</label>
<select class="form-control" name="progress">
<option>Ongoing</option>
<option>Done</option>
<option>Halted</option>
</select>
</div>
</div>
</div>
<div class="form-group">
<label>Photo</label>
<input type="file" name="fileToUpload" class="form-control" required>
</div>
</div>
<div class="modal-footer justify-content-between">
<button type="submit" class="btn btn-primary">submit</button>
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

</div>
</form>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<?php 
if (isset($_GET['suc'])) {
	# code...
?>
<script type="text/javascript">
	$('#suc').modal('show');
</script>
<?php
}
?>
<?php 
if (isset($_GET['unsuc'])) {
	# code...
?>
<script type="text/javascript">
	$('#unsuc').modal('show');
</script>
<?php
}
?>
