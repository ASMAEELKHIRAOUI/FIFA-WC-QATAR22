<?php
include_once '../include/head.php';
include_once '../classes/stad.class.php';

$connect = new Database;
$connect->connect();
if(isset($_POST['updateStad'])){
    $stad= new Stad($_POST['name'] , $_POST['capacity'] , $_POST['location'] , $_POST['city'], $_POST['image']);
    $stad->updateStad($_POST['id']);
    
    }

$updatestad= new Stad();
$result = $updatestad->getStad($_GET['id']);
//put the attributs inside of objects
if($result){
    $id = $result['id'];
    $name = $result['name'];
    $capacity = $result['capacity'];
    $location = $result['location'];
    $city = $result['city'];
    // $image = $result['image'];
}

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Main CSS-->
    <link href="../assets/css/dashtest.css" rel="stylesheet" media="all">
</head>

<div class="container" id="modal-stad">
    <div class="modal-content">
        <form action="" method="POST" id="form" data-parsley-validate>
            <div class="modal-header">
                <h5 class="modal-title">Edit Stad</h5>
            </div>
            <div class="modal-body">
    
                    <input type="hidden" name="id" value="<?php echo $id; ?>">

                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" required/>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Capacity</label>
                        <input type="number" name="capacity" class="form-control" value="<?php echo $capacity; ?>" required/>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Location</label>
                        <input type="text" name="location" class="form-control" value="<?php echo $location; ?>" required/>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">City</label>
                        <input type="text" name="city" class="form-control" value="<?php echo $city; ?>" required/>
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image</label>
                        <input class="form-control" name="image" type="file" id="formFile" value="<?php echo $image; ?>">
                    </div>
                
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-white border" data-bs-dismiss="modal" id="cancel-btn">Cancel</a>
                <button type="submit" name="updateStad" class="color btn  text-light task-action-btn" id="save-btn">Save changes</button>
            </div>
        </form>
    </div>
</div>