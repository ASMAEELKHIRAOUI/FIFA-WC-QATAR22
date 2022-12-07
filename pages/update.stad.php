<div class="modal fade" id="modal-stad">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="" method="POST" id="form" data-parsley-validate>
					<div class="modal-header">
						<h5 class="modal-title">Edit Stad</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
			
							<input type="hidden" name="id" >

                            <div class="mb-3">
								<label class="form-label">Name</label>
								<input type="text"  class="form-control"  required/>
							</div>

                            <div class="mb-3">
								<label class="form-label">Capacity</label>
								<input type="text"  class="form-control"  required/>
							</div>

							<div class="mb-3">
								<label class="form-label">Location</label>
								<input type="text"  class="form-control"  required/>
							</div>

                            <div class="mb-3">
								<label class="form-label">City</label>
								<input type="text"  class="form-control"  required/>
							</div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
						
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white border" data-bs-dismiss="modal" id="cancel-btn">Cancel</a>
						<button type="submit" name="Add" class="color btn  text-light task-action-btn" id="save-btn">Save changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>