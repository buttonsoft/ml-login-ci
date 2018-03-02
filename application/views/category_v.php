<button class="btn btn-outline-success" onclick="add_category()"><i class="glyphicon glyphicon-plus"></i> Add Category</button>
<br />
<br />
<div class="table-responsive">
    <table class="table table-striped table-bordered table-sm">
      <thead>
        <tr>
          <th>No</th>
          <th>Category Name</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
      	<?php $no=1; foreach ($category as $ctg) : ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $ctg->category_name ?></td>
			<td>
				<button class="btn btn-outline-warning btn-sm" onclick="edit_category(<?php echo $ctg->category_id; ?>)"><i class="glyphicon glyphicon-pencil"></i> Update</button>
				<button class="btn btn-outline-danger btn-sm" onclick="delete_category(<?php echo $ctg->category_id; ?>)"><i class="glyphicon glyphicon-remove"></i> Delete</button>
			</td>
		</tr>
		<?php $no++; endforeach; ?>
      </tbody>
    </table>
  </div>

<script src="<?php echo base_url().'assets/jquery/jquery-3.1.0.min.js' ?>"></script>
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js' ?>"></script>
<script src="<?php echo base_url().'assets/datatables/js/jquery.dataTables.min.js' ?>"></script>
<script src="<?php echo base_url().'assets/datatables/js/dataTables.bootstrap.js' ?>"></script>

<script type="text/javascript">

	$(document).ready(function() {
		$('#table_id').DataTable();
	});
	var save_method; //for method string
	var table;

	function add_category() {
		save_method = 'add';
		$('#form')[0].reset(); //reset form on modals
		$('#modal_form').modal('show'); //show bootstrap modal
	}

	function edit_category(id) {
		save_method = 'update';
		$('#form')[0].reset(); //reset form on modals

		//load data from ajax
		$.ajax({
			url	: "<?php echo site_url('index.php/category/ajax_edit/') ?>/" + id,
			type : "GET",
			dataType : "JSON",
			success: function(data)
			{
				$('[name="category_id"]').val(data.category_id);
				$('[name="category_name"]').val(data.category_name);

				$('#modal_form').modal('show'); //show bootstrap modal when complete loaded
				$('.modal-title').text('Edit Category'); //set title to bootstrap modal title
			},
			error: function (jqXHR, textStatus, errorThrown) {
				alert('Error get data from ajax');
			}
		});
	}

	function save() {
		var url;
		if(save_method == 'add') {
			url = "<?php echo site_url('index.php/category/category_add') ?>";
		} else {
			url = "<?php echo site_url('index.php/category/category_update') ?>"
		}

		//adding data to database
		$.ajax({
			url : url,
			type : "POST",
			data :$('#form').serialize(),
			dataType : "JSON",
			success : function(data)
			{
				//if success close modal and reload ajax table
				$('#modal_form').modal('hide');
				location.reload(); //for reload a page
			},
			error : function (jqXHR, textStatus, errorThrown) {
				alert('Error adding / update data');
			}
		});
	}

	function delete_category(id) {
		if(confirm('Are you sure delete this data?')) {
			//delete data from database
			$.ajax({
				url : "<?php echo site_url('index.php/category/category_delete/') ?>/" + id,
				type : "POST",
				dataType : "JSON",
				success : function(data)
				{
					location.reload();
				},
				error: function (jqXHR, textStatus, errorThrown) {
					alert('Error deleting data');
				}
			});
		}
	}

</script>

<!-- bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismis="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3 class="modal-title">Category Form</h3>
			</div>
			<div class="modal-body form">
				<form action="#" id="form" class="form-horizontal">
					<input type="hidden" name="category_id" value="" />
					<div class="form-body">
						<div class="form-group">
							<label class="control-label col-md-3">Category Name</label>
							<div class="col-md-9">
								<input name="category_name" placeholder="Category name" class="form-control" type="text" />
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>