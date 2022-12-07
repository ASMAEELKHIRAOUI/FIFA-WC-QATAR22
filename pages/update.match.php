<?php
include '../include/head.php';
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Main CSS-->
    <link href="../assets/css/dashtest.css" rel="stylesheet" media="all">
</head>
<div class="container" id="modal"&>
    <div class="app-content">
        <form action="" method="POST" id="form" data-parsley-validate>
            <div class="modal-header">
                <h5 class="modal-title">Edit Match</h5>
            </div>
            <div class="modal-body">
    
                    <input type="hidden" name="id" >

                    <div class="mb-3">
                        <label class="form-label">Date</label>
                        <input type="datetime-local"  class="form-control"  required/>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">First team</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Second team</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Stad</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="number" class="form-control" step="any" id="task-date" required/>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="Description" rows="3" required></textarea>
                    </div>
                
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-white border" data-bs-dismiss="modal" id="cancel-btn">Cancel</a>
                <button type="submit" name="Add" class="color btn  text-light task-action-btn" id="save-btn">Save changes</button>
            </div>
        </form>
    </div>
</div>
