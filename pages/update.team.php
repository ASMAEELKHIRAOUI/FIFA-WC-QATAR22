<?php
include '../include/head.php';
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Main CSS-->
    <link href="../assets/css/dashtest.css" rel="stylesheet" media="all">
</head>

<div class="" id="modal-teams">
		<div class="container">
			<div class="modal-content">
				<form action="" method="POST" id="form" data-parsley-validate>
					<div class="modal-header">
						<h5 class="modal-title">Edit Team</h5>
					</div>
					<div class="modal-body">
			
							<input type="hidden" name="id" >

                            <div class="mb-3">
								<label class="form-label">Country</label>
								<input type="text"  class="form-control"  required/>
							</div>

                            <div class="mb-3">
								<label class="form-label">Coach</label>
								<input type="text"  class="form-control"  required/>
							</div>

							<div class="mb-3">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Logo</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
						
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white border" data-bs-dismiss="modal" id="cancel-btn">Cancel</a>
						<button type="submit" name="Add" class="color btn  text-light" id="save-btn">Save changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>