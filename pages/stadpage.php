<?php include_once '../scripts.php/landingpage.script.php';?>
    

<?php include_once '../include/head.php'; ?>
<?php include_once '../include/navbar.php'; ?>
<link rel="stylesheet" href="../assets/css/landing_page.css">


    <div class=" container my-3">
        <!-- cet card pour les match  -->
        <div class=" row my-2 my-ms-1">
            <?php if(isset($_POST['display-Machts'])):?>
                <?php foreach($matchs as $match): ?>
                    <div class="col-lg-3 col-md-6 col-sm-12 my-1">
                        <div class="card ">
                            <div class="position-relative">
                                <img class="card-img-top " alt="100%x280" src="https://img.freepik.com/premium-vector/football-2022-qatar-purple-background-isometric-vector-illustration_64478-1268.jpg">
                                <img class=" position-absolute top-50 start-0 translate-middle-y" style="width: 6rem;"  src="https://www.nicepng.com/png/full/291-2914458_morocco-soccer-logo-morocco-national-football-team-logo.png" alt="">
                                <img class="position-absolute top-50 end-0 translate-middle-y" style="width: 6rem;" src="https://upload.wikimedia.org/wikipedia/ar/thumb/3/31/Spain_National_Football_Team_badge.png/800px-Spain_National_Football_Team_badge.png" alt="">
                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class=" d-flex align-items-center">
                                        NOV<br>25
                                    </div>
                                    <div class="ms-5">
                                        <div>morocco vs canada</div>
                                        <div>$ 150</div>
                                        <i class="fa-solid fa-location-dot"></i><spain> Ahmed ben Ali staduim</spain>
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