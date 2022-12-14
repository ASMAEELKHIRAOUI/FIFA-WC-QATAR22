<?php include_once '../scripts.php/landingpage.script.php';
include_once '../scripts.php/reservation.script.php';
include_once '../classes/spectateur.class.php';

 if(!isset($_SESSION['name'])){
    header('location:../pages/signin.php');
  }
?>

    <?php include_once '../include/head.php' ?>
    <link rel="stylesheet" href="../assets/css/landing_page.css">
    <body>
    <?php include_once '../include/navbar_landingpage.php' ?>          

        <header class="">  
            <!-- Background image -->
            <div
                class="bg-image"
                style="
                background-image: url('../assets/img/general/header_bacground.png');
                background-attachment: fixed;
                background-size: 100%;
                background-repeat: no-repeat;
                background-position: left top;
                ">

                <div class="header-content position-relative "  >
                    <div class="text-white">
                        <h1  class="titel mt-5 text-center ">Exclusive Matchs, priceless moments</h1>
                    </div>
                    <div class=" header-search position-absolute top-100 start-50 translate-middle bg-white border border-dark rounded-1" >
                        <div class="input-group rounded d-flex justify-content-between align-items-center">
                            <input type="search" id="search-input-id" onkeyup="search(this.value)" class="me-3 form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                            <iconify-icon inline icon="material-symbols:date-range-outline-sharp" data-bs-toggle="modal" data-bs-target="#exampleModal" class="me-3" style="color: #8a1538;" width="25" height="25"></iconify-icon>
                            <iconify-icon inline class="me-1" icon="ic:twotone-search" style="color: #8a1538;" width="25" height="25"></iconify-icon>
                            </span>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Background image -->
        </header>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ches date</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Start</label>
                        <input type="datetime-local" class="form-control" id="task_date" name="task-date"/>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">End</label>
                        <input type="datetime-local" class="form-control" id="task_date" name="task-date"/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">ok</button>
                </div>
                </div>
            </div>
        </div>
        
        <div id="section1" class="invisible mb-5">invisible</div>
        <section class="" >
            <div class="container">
                <div class="row" >
                    <div class="col-12 d-flex justify-content-between">
                        <h3 class="mb-3">Upcoming Machts</h3>
                        <form action="displaycards.php" method="POST">
                            <button type="submit" name="display-Machts" class="d-flex align-items-center bg-white border-0" style="color: #8a1538;">
                                view all <iconify-icon class=""  icon="material-symbols:arrow-forward-ios-rounded" style="color: #8a1538;"></iconify-icon>
                            </button>
                        </form>
                    </div>
                    <div class="col-12 position-relative">
                        <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" id="carousel-matchs-container-id" >
                                <div class="carousel-item active">
                                    <div class="row">
                                        <?php for($i=0 ; $i<3 && $i < count($matches) ; $i++): ?>
                                            <div class="col-md-4 mb-3 ">
                                                    <div class="card">
                                                        <form class="w-100 h-100" action="ticketpage.php" method="POST">

                                                            <button value="<?php echo $i ?>" type="submit" name="match-id"  class="w-100    bg-white border border-0 ">
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
                                    </div>
                                </div>
                                <?php for($i=3 ; $i<count($matches); $i+=3): ?>
                                    <div class="carousel-item ">
                                        <div class="row">
                                            <?php for($j=$i ; $j<$i + 3 && $j<count($matches) ; $j++): ?>
                                                <div class="col-md-4 mb-3">
                                                        <div class="card ">
                                                            <form class="" action="ticketpage.php" method="POST">
                                                                <button value="<?php echo $j ?>" type="submit" name="match-id"  class="w-100 h-100 bg-white border border-0  ">
                                                                    <div class="position-relative w-100">
                                                                        <img class="card-img-top " alt="100%x280" src="../assets/img/general/card_background.png">
                                                                        <img class="flag position-absolute top-50 start-0 translate-middle-y"  height="20px" src="../assets/img/flag/<?php echo $matches[$j]->getTeame_1_obj()->getLogo(); ?>" alt="<?php echo $matches[$j]->getTeame_1_obj()->getLogo(); ?>">
                                                                        <img class="flag position-absolute top-50 end-0 translate-middle-y" src="../assets/img/flag/<?php echo $matches[$j]->getTeame_2_obj()->getLogo(); ?>" alt="<?php echo $matches[$j]->getTeame_2_obj()->getLogo(); ?>">
                                                                    </div>
                                                                    <div class="card-body">
                                                                    <div class="card-body ">
                                                                        <p class="fw-semibold"><?php echo $matches[$j]->getTeame_1_obj()->getCountry(); ?> vs <?php echo $matches[$j]->getTeame_2_obj()->getCountry(); ?></p>
                                                                        <div class=" d-flex my-2 justify-content-between">
                                                                            <div><?php echo $matches[$j]->getDateTimeFormat() ?></div>
                                                                            <div>$ <?php echo $matches[$j]->getPrice(); ?></div>
                                                                        </div>
                                                                        <div class="mt-3"> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> <?php echo $matches[$j]->getStaduim_obj()->getName(); ?></div>
                                                                    </div>
                                                                    </div>
                                                                </button>
                                                            </form>
                                                        </div>
                                                        
                                                    
                                                </div>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                <?php endfor; ?>
                                
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev">
                            <iconify-icon class="fs-1" icon="line-md:arrow-left-circle" style="color: #FFF;"></iconify-icon>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next">
                            <iconify-icon class="fs-1" icon="line-md:arrow-right-circle" style="color: #FFF;"></iconify-icon>
                        </button>
                    
                        
                    </div>
                </div>
            </div>
        </section>


        <div id="section2" class="invisible mb-5">invisible</div>
        <section class="pt-5 pb-5" >
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between">
                        <h3 class="mb-3">standings</h3>
                    </div>
                    <div class="col-12 position-relative">
                        <div id="carouselExampleControls4" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="">
                                        <div class="">
                                            <img class="w-100" src="https://neiuindependent.org/wp-content/uploads/2022/04/QUINIELAQATAR-1.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="">
                                        <div class=" ">
                                            <img class="w-100" src="https://library.sportingnews.com/styles/crop_style_16_9_mobile_2x/s3/2022-12/England_WC%20Round%20of%2016%20Bracket-2.jpg" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="">
                                        <div class="">
                                            <img class="w-50 " src="../assets/img/standings/8_final.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="">
                                        <div class="">
                                            <img class="w-100 " src="https://i.ytimg.com/vi/qyjhQaVtoT8/maxresdefault.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls4" data-bs-slide="prev">
                            <iconify-icon class="fs-1" icon="line-md:arrow-left-circle" style="color: #FFF;"></iconify-icon>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls4" data-bs-slide="next">
                            <iconify-icon class="fs-1" icon="line-md:arrow-right-circle" style="color: #FFF;"></iconify-icon>
                        </button>
                    
                        
                    </div>
                </div>
            </div>
        </section>

        <div id="section3" class="invisible mb-5">invisible</div>
        <section class="" id="section3">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between">
                        <h3 class="mb-3">Browse National Teams</h3>
                        <form action="displaycards.php" method="POST">
                            <button type="submit" name="display-Teams" class="d-flex align-items-center bg-white border-0" style="color: #8a1538;">
                                view all <iconify-icon class=""  icon="material-symbols:arrow-forward-ios-rounded" style="color: #8a1538;"></iconify-icon>
                            </button>
                        </form>
                    </div>
                    <div class="col-12 position-relative">
                        <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <?php for($i=0 ; $i<3 && $i < count($teams) ; $i++): ?>
                                            <div class="col-md-4 mb-3">
                                                <div class="card ">
                                                    <img class="card-img-top" alt="100%x280" src="../assets/img/teams/<?php echo $teams[$i]->getImage() ?>">
                                                    <div class="card-body">
                                                            <div><?php echo $teams[$i]->getCountry() ?> National Teames</div>
                                                            <div>Coatch : <?php echo $teams[$i]->getCoatch() ?></div>
                                                            <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> <?php echo $teams[$i]->getCountry() ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                                <?php for($i=3 ; $i< count($teams) ; $i+=3): ?>
                                    <div class="carousel-item">
                                        <div class="row">
                                            <?php for( $j=$i ; $j<($i + 3) && $j<count($teams) ; $j++): ?>
                                                <div class="col-md-4 mb-3">
                                                    <div class="card ">
                                                        <img class="card-img-top" alt="100%x280" src="../assets/img/teams/<?php echo $teams[$j]->getImage() ?>">
                                                        <div class="card-body">
                                                                <div><?php echo $teams[$j]->getCountry() ?> National Teames</div>
                                                                <div>Coatch : <?php echo $teams[$i]->getCoatch() ?></div>
                                                                <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> <?php echo $teams[$j]->getCountry() ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                <?php endfor; ?>

                                <div class="carousel-item">
                                    <div class="row">
                                        <?php for($j=30 ; $j<32 ; $j++): ?>
                                            <div class="col-md-4 mb-3">
                                                <div class="card ">
                                                    <img class="card-img-top" alt="100%x280" src="../assets/img/teams/<?php echo $teams[$j]->getImage() ?>">
                                                    <div class="card-body">
                                                            <div><?php echo $teams[$j]->getCountry() ?> National Teames</div>
                                                            <div>Group F</div>
                                                            <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> <?php echo $teams[$j]->getCountry() ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                    </div>

                                
                                
                                
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
                            <iconify-icon class="fs-1" icon="line-md:arrow-left-circle" style="color: #FFF;"></iconify-icon>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
                            <iconify-icon class="fs-1" icon="line-md:arrow-right-circle" style="color: #FFF;"></iconify-icon>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <div id="section4" class="invisible mb-5">invisible</div>
        <section class="pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between">
                        <h3 class="mb-3">Browse Stads</h3>
                        <form action="displaycards.php" method="POST">
                            <button type="submit" name="display-Stads" class="d-flex align-items-center bg-white border-0" style="color: #8a1538;">
                                view all <iconify-icon class=""  icon="material-symbols:arrow-forward-ios-rounded" style="color: #8a1538;"></iconify-icon>
                            </button>
                        </form>
                    </div>
                    <div class="col-12 position-relative">
                        <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <?php for($i=0 ; $i<3 ; $i++): ?>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="card-img-top" alt="100%x280" src="../assets/img/stad/<?php echo($stads[$i]-> getImage()) ;?>">
                                                    <div class="card-body">
                                                            <div><?php echo($stads[$i]->getName()) ;?></div>
                                                            <div>capacity : <span><?php echo($stads[$i]->getCapacity()) ;?></span></div>
                                                            <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> <span><?php echo($stads[$i]->getCity()) ;?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                                <div class="carousel-item  ">
                                    <div class="row">
                                        <?php for($i=3 ; $i<6 ; $i++): ?>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="card-img-top" alt="100%x280" src="../assets/img/stad/<?php echo($stads[$i]-> getImage()) ;?>">
                                                    <div class="card-body">
                                                            <div><?php echo($stads[$i]->getName()) ;?></div>
                                                            <div>capacity : <span><?php echo($stads[$i]->getCapacity()) ;?></span></div>
                                                            <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> <span><?php echo($stads[$i]->getCity()) ;?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endfor; ?>
                                        

                                    </div>
                                </div>
                                <div class="carousel-item  ">
                                    <div class="row">
                                        <?php for($i=6 ; $i<8 ; $i++): ?>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="card-img-top" alt="100%x280" src="../assets/img/stad/<?php echo($stads[$i]-> getImage()) ;?>">
                                                    <div class="card-body">
                                                            <div><?php echo($stads[$i]->getName()) ;?></div>
                                                            <div>capacity : <span><?php echo($stads[$i]->getCapacity()) ;?></span></div>
                                                            <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> <span><?php echo($stads[$i]->getCity()) ;?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="prev">
                            <iconify-icon class="fs-1" icon="line-md:arrow-left-circle" style="color: #FFF;"></iconify-icon>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="next">
                            <iconify-icon class="fs-1" icon="line-md:arrow-right-circle" style="color: #FFF;"></iconify-icon>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <?php include '../include/footer.php' ?>
        

        <script src="../scripts.js/landingpage.script.js"></script>
        <!-- JavaScript Bundle with Popper -->
    </body>
</html>
