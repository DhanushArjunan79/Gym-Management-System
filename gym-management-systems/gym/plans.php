<?php include('db_connect.php');?>

<div class="container-fluid">
	<div class="col-lg-12">
		<div class="row">
			<!-- FORM Panel -->
			<div class="col-md-4">
				<form action="" id="manage-plan">
					<div class="card">
						<div class="card-header">
							Plan Form
						</div>
						<div class="card-body">
							<input type="hidden" name="id" id="edit_plan_id">
							<div class="form-group">
								<label for="edit_plan_name">Plan (months)</label>
								<input type="number" class="form-control text-right" min="1" name="plan" id="edit_plan_name">
							</div>
							<div class="form-group">
								<label for="edit_plan_amount">Amount</label>
								<input type="number" class="form-control text-right" step="any" name="amount" id="edit_plan_amount">
							</div>
						</div>
						<div class="card-footer">
							<div class="row">
								<div class="col-md-12">
									<button class="btn btn-sm btn-primary col-sm-3 offset-md-3">Save</button>
									<button class="btn btn-sm btn-default col-sm-3" type="button" onclick="_reset()">Cancel</button>
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
						<b>Plan List</b>
						<button class="btn btn-sm btn-success float-right" data-toggle="modal" data-target="#newplanmodal">New Plan</button>
					</div>
					<div class="card-body">
						<table class="table table-bordered table-hover">
							<colgroup>
								<col width="5%">
								<col width="55%">
								<col width="20%">
								<col width="20%">
							</colgroup>
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Plan</th>
									<th class="text-center">Amount</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
								$plan = $conn->query("SELECT * FROM plans order by id asc");
								while($row=$plan->fetch_assoc()):
								?>
								<tr>
									<td class="text-center"><?php echo $i++ ?></td>
									<td class="">
										<p><b><?php echo $row['plan'] ?></b> month/s</p>
									</td>
									<td class="text-right">
										<b><?php echo number_format($row['amount'],2) ?></b>
									</td>
									<td class="text-center">
									<button class="btn btn-sm btn-primary edit_plan" type="button" data-id="<?php echo $row['id'] ?>" data-plan="<?php echo $row['plan'] ?>" data-amount="<?php echo $row['amount'] ?>">Edit</button>
										<button class="btn btn-sm btn-danger delete_plan" type="button" data-id="<?php echo $row['id'] ?>">Delete</button>
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

<!-- New Plan Modal -->
<div class="modal fade" id="newplanmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">New Plan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="new_plan_form">
					<div class="form-group">
						<label for="new_plan_name">Plan (months)</label>
						<input type="number" class="form-control text-right" min="1" name="plan" id="new_plan_name">
					</div>
					<div class="form-group">
						<label for="new_plan_amount">Amount</label>
						<input type="number" class="form-control text-right" step="any" name="amount" id="new_plan_amount">
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-primary" id="save_new_plan">Save Plan</button>
			</div>
		</div>
	</div>
</div>
<!-- New Plan Modal -->
<div class="modal fade" id="newplanmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">New Plan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="new_plan_form">
                    <div class="form-group">
                        <label for="new_plan_name">Plan (months)</label>
                        <input type="number" class="form-control text-right" min="1" name="plan" id="new_plan_name">
                    </div>
                    <div class="form-group">
                        <label for="new_plan_amount">Amount</label>
                        <input type="number" class="form-control text-right" step="any" name="amount" id="new_plan_amount">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="save_new_plan">Save Plan</button>
            </div>
        </div>
    </div>
</div>
<!-- New Plan Modal -->
<!-- New Plan Modal -->

<style>
	td{
		vertical-align: middle !important;
	}
</style>
<script>
    // Save New Plan
    $('#save_new_plan').click(function () {
        $('#new_plan_form').submit();
    });

    $('#new_plan_form').submit(function (e) {
        e.preventDefault();
        start_load();
        $.ajax({
            url: 'ajax.php?action=save_plan',
            data: new FormData($(this)[0]),
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            type: 'POST',
            success: function (resp) {
                if (resp == 1) {
                    alert_toast("Data successfully added", 'success');
                    setTimeout(function () {
                        location.reload();
                    }, 1500);
                }
            },
        });
    });
	function _reset(){
		$('#manage-plan').get(0).reset()
		$('#manage-plan input,#manage-plan textarea').val('')
	}

	$('.edit_plan').click(function(){
		var id = $(this).attr('data-id');
		var plan = $(this).attr('data-plan');
		var amount = $(this).attr('data-amount');

		$('#edit_plan_id').val(id);
		$('#edit_plan_name').val(plan);
		$('#edit_plan_amount').val(amount);

		$('#editplanmodal').modal('show');
	})

	$('#new_plan_form').submit(function(e){
		e.preventDefault();
		start_load();
		$.ajax({
			url:'ajax.php?action=save_plan',
			data: new FormData($(this)[0]),
			cache: false,
			contentType: false,
			processData: false,
			method: 'POST',
			type: 'POST',
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully added",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	})

	$('#manage-plan').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_plan',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully added",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
				else if(resp==2){
					alert_toast("Data successfully updated",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	})
	$('.edit_plan').click(function(){
		start_load()
		var cat = $('#manage-plan')
		cat.get(0).reset()
		cat.find("[name='id']").val($(this).attr('data-id'))
		cat.find("[name='plan']").val($(this).attr('data-plan'))
		cat.find("[name='amount']").val($(this).attr('data-amount'))
		end_load()
	})
	$('.delete_plan').click(function(){
		_conf("Are you sure to delete this plan?","delete_plan",[$(this).attr('data-id')])
	})
	function delete_plan($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_plan',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
	$('table').dataTable()
</script>
