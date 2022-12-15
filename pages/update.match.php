<?php
include_once '../include/head.php';
include_once '../classes/match.class.php';
include_once '../scripts.php/crudadmin.script.php';
include_once '../classes/stad.class.php';



$connect = new Database;
$connect->connect();
if(isset($_POST['updateMatch'])){
    $match= new Matches($_POST['datetime'] , $_POST['team_1'] , $_POST['team_2'] , $_POST['stad'] , $_POST['price'] , $_POST['description']);
    $match->updateMatch($_POST['id']);
     
    }

$match= new Matches();
$result = $match->getMatcheasma($_GET['id']);
//put the attributs inside of objects
if($result){
    $id = $result['id'];
    $t1 = $result['match_team1'];
    $t2 = $result['match_team2'];
    $stadium = $result['stad'];
    $price = $result['price'];
    $description = $result['description'];
    $datetime = $result['datetime'];
}

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
    
                    <input type="hidden" name="id" value="<?php echo $id; ?>">

                    <div class="mb-3">
                        <label class="form-label">Date and Time</label>
                        <input type="datetime-local" name="datetime" class="form-control" value="<?php echo $datetime; ?>" required/>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">First team</label>
                        <select class="form-select" name="team_1" aria-label="Default select example">
                            <option <?= (isset($t1)) ? "" : "selected" ?>>Press to select</option>    
                            <?php foreach($teams as $team) :?>
                                <option <?= ($team->getId() == $t1) ? "selected" : "" ?> value="<?= $team->getId() ?>"><?php echo $team->getCountry(); ?> </option>
                            <?php endforeach;?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Second team</label>
                        <select class="form-select" name="team_2" aria-label="Default select example">
                            <option <?= (isset($t2)) ? "" : "selected" ?>>Press to select</option>    
                            <?php foreach($teams as $team):?>
                                <option <?= ($team->getId() == $t2) ? "selected" : "" ?> value="<?php echo $team->getId(); ?>"><?php echo $team->getCountry(); ?> </option>
                            <?php endforeach;?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Stad</label>
                        <select class="form-select" name="stad" aria-label="Default select example">
                            
                            <?php  foreach( $stads as $stad ) :   ?>
                                <option <?= ($stad->getId() == $stadium) ? "selected" : "" ?> value="<?php  echo $stad->getId(); ?>"><?php echo $stad->getName(); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="number" name ="price" class="form-control" step="any" id="task-date" value="<?php echo $price; ?>" required/>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="3" required><?php echo $description; ?></textarea>
                    </div>
                
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-white border" data-bs-dismiss="modal" id="cancel-btn">Cancel</a>
                <button type="submit" name="updateMatch" class="color btn  text-light task-action-btn" id="save-btn">Save changes</button>
            </div>
        </form>
    </div>
</div>
