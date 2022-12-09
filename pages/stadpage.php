<?php include_once '../scripts.php/landingpage.script.php';?>
    

<?php include_once '../include/head.php'; ?>
<?php include_once '../include/navbar.php'; ?>
<link rel="stylesheet" href="../assets/css/landing_page.css">


    <div class=" container my-3">
        <!-- cet card pour les match  -->
        <div class=" row my-2 my-ms-1">
            <?php if(isset($_POST['display-Machts'])):?>
                <?php foreach($matches as $match): ?>
                    <div class="col-lg-3 col-md-6 col-sm-12 my-1">
                        <div class="card ">
                            <div class="position-relative">
                                <img class="card-img-top " alt="100%x280" src="../assets/img/general/card_background.png">


                                <img class="flag position-absolute top-50 start-0 translate-middle-y"  height="20px" src="../assets/img/flag/<?php echo $match->getTeame_1_obj()->getLogo(); ?>" alt="<?php echo $match->getTeame_1_obj()->getLogo(); ?>">
                                <img class="flag position-absolute top-50 end-0 translate-middle-y" src="../assets/img/flag/<?php echo $match->getTeame_2_obj()->getLogo(); ?>" alt="<?php echo $match->getTeame_2_obj()->getLogo(); ?>">
                            </div>
                            <div class="card-body">
                                <div class=" d-flex align-items-center">
                                    <div class="ms-5 text-center">
                                        <div><?php echo $match->getTeame_1_obj()->getCountry(); ?> vs <?php echo $match->getTeame_2_obj()->getCountry(); ?></div>
                                        <div><?php echo $match->getDateTimeFormat() ?></div>
                                        <div>$ <?php echo $match->getPrice(); ?></div>
                                        <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> <?php echo $match->getStaduim_obj()->getName(); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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