<?php include('db_connect.php');?>

<div class="container-fluid">
	
	<div class="col-lg-12">
		<div class="row">
			<!-- FORM Panel -->
			<div class="col-md-4">
			<form action="" id="manage-member">
				<div class="card">
					<div class="card-header">
						Member Form
				  	</div>
					<div class="card-body">
						<input type="hidden" name="id">
						<div class="form-group">
							<label class="control-label">First Name</label>
							<input type="text" class="form-control" name="firstname">
						</div>
						<div class="form-group">
							<label class="control-label">Last Name</label>
							<input type="text" class="form-control" name="lastname">
						</div>
						<div class="form-group">
							<label class="control-label">Middle Name</label>
							<input type="text" class="form-control" name="middlename">
						</div>
						<div class="form-group">
							<label class="control-label">Email</label>
							<input type="email" class="form-control" name="email">
						</div>
						<div class="form-group">
							<label class="control-label">Contact</label>
							<input type="text" class="form-control" name="contact">
						</div>
					</div>
					<div class="card-footer">
						<div class="row">
							<div class="col-md-12">
								<button class="btn btn-sm btn-primary col-sm-3 offset-md-3"> Save</button>
								<button class="btn btn-sm btn-default col-sm-3" type="button" onclick="_reset()"> Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			</div>
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<b>List of Members</b>
					</div>
					<div class="card-body">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Name</th>
									<th class="text-center">Email</th>
									<th class="text-center">Contact</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
								$members = $conn->query("SELECT * FROM members order by id asc");
								while($row = $members->fetch_assoc()):
								?>
								<tr>
									<td class="text-center"><?php echo $i++ ?></td>
									<td class="">
										<p><i class="fa fa-user"></i> <b><?php echo $row['firstname'].' '.$row['middlename'].' '.$row['lastname'] ?></b></p>
									</td>
									<td class="">
										<p><i class="fa fa-at"></i> <b><?php echo $row['email'] ?></b></p>
									</td>
									<td class="">
										<p><i class="fa fa-phone-square-alt"></i> <b><?php echo $row['contact'] ?></b></p>
									</td>
									<td class="text-center">
										<button class="btn btn-sm btn-primary edit_member" type="button" data-id="<?php echo $row['id'] ?>" data-firstname="<?php echo $row['firstname'] ?>" data-lastname="<?php echo $row['lastname'] ?>" data-middlename="<?php echo $row['middlename'] ?>" data-email="<?php echo $row['email'] ?>" data-contact="<?php echo $row['contact'] ?>">Edit</button>
										<button class="btn btn-sm btn-danger delete_member" type="button" data-id="<?php echo $row['id'] ?>">Delete</button>
									</td>
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	
</div>

<style>
	td{
		vertical-align: middle !important;
	}
	td p{
		margin: unset;
	}
</style>

<script>
	function _reset(){
		$('#manage-member').get(0).reset();
		$('#manage-member input').val('');
	}

	$('#manage-member').submit(function(e){
		e.preventDefault();
		start_load();
		$.ajax({
			url:'ajax.php?action=save_member',
			data: new FormData($(this)[0]),
			cache: false,
			contentType: false,
			processData: false,
			method: 'POST',
			type: 'POST',
			success:function(resp){
				if(resp == 1){
					alert_toast("Member added successfully!", 'success');
					setTimeout(function(){
						location.reload();
					}, 1500);
				}
				else if(resp == 2){
					alert_toast("Member updated successfully!", 'success');
					setTimeout(function(){
						location.reload();
					}, 1500);
				}
			}
		})
	})

	$('.edit_member').click(function(){
		start_load();
		var memberForm = $('#manage-member');
		memberForm.get(0).reset();
		memberForm.find("[name='id']").val($(this).attr('data-id'));
		memberForm.find("[name='firstname']").val($(this).attr('data-firstname'));
		memberForm.find("[name='lastname']").val($(this).attr('data-lastname'));
		memberForm.find("[name='middlename']").val($(this).attr('data-middlename'));
		memberForm.find("[name='email']").val($(this).attr('data-email'));
		memberForm.find("[name='contact']").val($(this).attr('data-contact'));
		end_load();
	})

	$('.delete_member').click(function(){
		_conf("Are you sure to delete this member?", "delete_member", [$(this).attr('data-id')]);
	})

	$('table').dataTable();
</script>
