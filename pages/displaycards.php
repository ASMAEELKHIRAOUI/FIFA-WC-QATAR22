<?php include_once '../scripts.php/landingpage.script.php';?>
    

<?php include_once '../include/head.php'; ?>
<?php include_once '../include/navbar.php'; ?>
<link rel="stylesheet" href="../assets/css/landing_page.css">


    <div class=" container my-3">
        <!-- cet card pour les match  -->
        <div class=" row my-2 my-ms-1">
            <?php if(isset($_POST['display-Machts'])):?>
                <?php for($i=0 ; $i<count($matches) ; $i++): ?>
                    <div class="col-md-4 mb-3">
                        <div class="card ">
                            <form class="w-100" action="ticketpage.php" method="POST">
                                <button value="<?php echo $matches[$i]->getId() ?>" type="submit" name="match-id"  class="w-100    bg-white border border-0 ">
                                    <div class="position-relative w-100">
                                        <img class="card-img-top " alt="100%x280" src="../assets/img/general/card_background.png">
                                        <img class="flag position-absolute top-50 start-0 translate-middle-y"   src="../assets/img/flag/<?php echo $matches[$i]->getTeame_1_obj()->getLogo(); ?>" alt="<?php echo $matches[$i]->getTeame_1_obj()->getLogo(); ?>">
                                        <img class="flag position-absolute top-50 end-0 translate-middle-y"   src="../assets/img/flag/<?php echo $matches[$i]->getTeame_2_obj()->getLogo(); ?>" alt="<?php echo $matches[$i]->getTeame_2_obj()->getLogo(); ?>">
                                    </div>
                                    <div class="card-body">
                                        <p class="fw-semibold"><?php echo $matches[$i]->getTeame_1_obj()->getCountry(); ?> vs <?php echo $matches[$i]->getTeame_2_obj()->getCountry(); ?></p>
                                        <div class=" d-flex my-2 justify-content-between">
                                            <div><?php echo $matches[$i]->getDateTimeFormat() ?></div>
                                            <div>$ <?php echo $matches[$i]->getPrice(); ?></div>
                                        </div>
                                        <div class="mt-3"> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> <?php echo $matches[$i]->getStaduim_obj()->getName(); ?></div>
                                    </div>
                                </button>
                            </form>
                        </div>
                    </div>
                <?php endfor; ?>
            <?php endif ?>
        </div>
        

        <!-- cet card pour les teames  -->
        <div class="row my-2  ">
            <?php if(isset($_POST['display-Teams'])):?>
                <?php foreach($teams as $team): ?>
                    <div class="col-lg-3 col-md-6 col-sm-12 my-1 ">
                        <div class="card ">
                            <img class=" card-img-top" alt="100%x280" src="../assets/img/teams/<?php echo $team->getImage()?>">
                            <div class="card-body">
                                <div><?php echo $team->getCountry() ?> National Teames</div>
                                <div>Group F</div>
                                <i class="fa-solid fa-location-dot"></i> <span><?php echo $team->getCountry() ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif ?>
        </div>


        
        <!-- cet card pour les stades  -->
        <div class="row my-2  ">
            <?php if(isset($_POST['display-Stads'])):?>
                <?php foreach($stads as $stad): ?>
                    <div class="col-lg-3 col-md-6 col-sm-12 my-1">
                        <div class="card">
                            <img class="card-img-top" alt="100%x280" src="../assets/img/stad/<?php echo($stad->getImage()) ;?>">
                            <div class="card-body">
                                <div><?php echo($stad->getName()) ;?></div>
                                <div class="mb-1">capacity : <span><?php echo($stad->getCapacity()) ;?></span></div>
                                <i class="fa-solid fa-location-dot"></i><spain> <?php echo($stad->getCity()) ;?></spain>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif ?>
        </div>
        



    </div>
    <?php include_once '../include/footer.php';?>
</body>
</html>