<?php include '../scripts.php/landingpage.script.php';?>
<!DOCTYPE html>
<html lang="en">
    <?php include '../include/head.php' ?>
    <link rel="stylesheet" href="../assets/css/landing_page.css">
    <body>
    <?php include '../include/navbar.php' ?>          

        <header>  
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
                            <input type="search" class="me-3 form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
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


        <section class="pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between">
                        <h3 class="mb-3">Upcoming Machts</h3>
                        <a href="#" class="d-flex align-items-center text-decoration-none" style="color: #8a1538;">
                                view all
                                <iconify-icon class="" icon="material-symbols:arrow-forward-ios-rounded" style="color: #8a1538;"></iconify-icon>
                        </a>
                        
                        
                    </div>
                    <div class="col-12 position-relative">
                        <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="card ">
                                                <div class="position-relative">
                                                    <img class="card-img-top " alt="100%x280" src="../assets/img/general/header_bacground.png">
                                                    <img class=" position-absolute top-50 start-0 translate-middle-y"  height="20px" src="https://www.nicepng.com/png/full/291-2914458_morocco-soccer-logo-morocco-national-football-team-logo.png" alt="">
                                                    <img class="position-absolute top-50 end-0 translate-middle-y" src="https://upload.wikimedia.org/wikipedia/ar/thumb/3/31/Spain_National_Football_Team_badge.png/800px-Spain_National_Football_Team_badge.png" alt="">
                                                </div>
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div class=" d-flex align-items-center">
                                                            NOV<br>25
                                                        </div>
                                                        <div class="ms-5">
                                                            <div>morocco vs canada</div>
                                                            <div>$ 150</div>
                                                            <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> Ahmed ben Ali staduim</div>
                                                        </div>

                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card ">
                                                <div class="position-relative">
                                                    <img class="card-img-top " alt="100%x280" src="https://img.freepik.com/premium-vector/football-2022-qatar-purple-background-isometric-vector-illustration_64478-1268.jpg">
                                                    <img class=" position-absolute top-50 start-0 translate-middle-y"  height="20px" src="https://www.nicepng.com/png/full/291-2914458_morocco-soccer-logo-morocco-national-football-team-logo.png" alt="">
                                                    <img class="position-absolute top-50 end-0 translate-middle-y" src="https://upload.wikimedia.org/wikipedia/ar/thumb/3/31/Spain_National_Football_Team_badge.png/800px-Spain_National_Football_Team_badge.png" alt="">
                                                </div>
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div class=" d-flex align-items-center">
                                                            NOV<br>25
                                                        </div>
                                                        <div class="ms-5">
                                                            <div>morocco vs canada</div>
                                                            <div>$ 150</div>
                                                            <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> Ahmed ben Ali staduim</div>
                                                        </div>

                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card ">
                                                <div class="position-relative">
                                                    <img class="card-img-top " alt="100%x280" src="https://img.freepik.com/premium-vector/football-2022-qatar-purple-background-isometric-vector-illustration_64478-1268.jpg">
                                                    <img class=" position-absolute top-50 start-0 translate-middle-y"  height="20px" src="https://www.nicepng.com/png/full/291-2914458_morocco-soccer-logo-morocco-national-football-team-logo.png" alt="">
                                                    <img class="position-absolute top-50 end-0 translate-middle-y" src="https://upload.wikimedia.org/wikipedia/ar/thumb/3/31/Spain_National_Football_Team_badge.png/800px-Spain_National_Football_Team_badge.png" alt="">
                                                </div>
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div class=" d-flex align-items-center">
                                                            NOV<br>25
                                                        </div>
                                                        <div class="ms-5">
                                                            <div>morocco vs canada</div>
                                                            <div>$ 150</div>
                                                            <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> Ahmed ben Ali staduim</div>
                                                        </div>

                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="card ">
                                                <div class="position-relative">
                                                    <img class="card-img-top " alt="100%x280" src="https://img.freepik.com/premium-vector/football-2022-qatar-purple-background-isometric-vector-illustration_64478-1268.jpg">
                                                    <img class=" position-absolute top-50 start-0 translate-middle-y"  height="20px" src="https://www.nicepng.com/png/full/291-2914458_morocco-soccer-logo-morocco-national-football-team-logo.png" alt="">
                                                    <img class="position-absolute top-50 end-0 translate-middle-y" src="https://upload.wikimedia.org/wikipedia/ar/thumb/3/31/Spain_National_Football_Team_badge.png/800px-Spain_National_Football_Team_badge.png" alt="">
                                                </div>
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div class=" d-flex align-items-center">
                                                            NOV<br>25
                                                        </div>
                                                        <div class="ms-5">
                                                            <div>morocco vs canada</div>
                                                            <div>$ 150</div>
                                                            <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> Ahmed ben Ali staduim</div>
                                                        </div>

                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card ">
                                                <div class="position-relative">
                                                    <img class="card-img-top " alt="100%x280" src="https://img.freepik.com/premium-vector/football-2022-qatar-purple-background-isometric-vector-illustration_64478-1268.jpg">
                                                    <img class=" position-absolute top-50 start-0 translate-middle-y"  height="20px" src="https://www.nicepng.com/png/full/291-2914458_morocco-soccer-logo-morocco-national-football-team-logo.png" alt="">
                                                    <img class="position-absolute top-50 end-0 translate-middle-y" src="https://upload.wikimedia.org/wikipedia/ar/thumb/3/31/Spain_National_Football_Team_badge.png/800px-Spain_National_Football_Team_badge.png" alt="">
                                                </div>
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div class=" d-flex align-items-center">
                                                            NOV<br>25
                                                        </div>
                                                        <div class="ms-5">
                                                            <div>morocco vs canada</div>
                                                            <div>$ 150</div>
                                                            <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> Ahmed ben Ali staduim</div>
                                                        </div>

                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card ">
                                                <div class="position-relative">
                                                    <img class="card-img-top " alt="100%x280" src="https://img.freepik.com/premium-vector/football-2022-qatar-purple-background-isometric-vector-illustration_64478-1268.jpg">
                                                    <img class=" position-absolute top-50 start-0 translate-middle-y"  height="20px" src="https://www.nicepng.com/png/full/291-2914458_morocco-soccer-logo-morocco-national-football-team-logo.png" alt="">
                                                    <img class="position-absolute top-50 end-0 translate-middle-y" src="https://upload.wikimedia.org/wikipedia/ar/thumb/3/31/Spain_National_Football_Team_badge.png/800px-Spain_National_Football_Team_badge.png" alt="">
                                                </div>
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div class=" d-flex align-items-center">
                                                            NOV<br>25
                                                        </div>
                                                        <div class="ms-5">
                                                            <div>morocco vs canada</div>
                                                            <div>$ 150</div>
                                                            <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> Ahmed ben Ali staduim</div>
                                                        </div>

                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="card ">
                                                <div class="position-relative">
                                                    <img class="card-img-top " alt="100%x280" src="https://img.freepik.com/premium-vector/football-2022-qatar-purple-background-isometric-vector-illustration_64478-1268.jpg">
                                                    <img class=" position-absolute top-50 start-0 translate-middle-y"  height="20px" src="https://www.nicepng.com/png/full/291-2914458_morocco-soccer-logo-morocco-national-football-team-logo.png" alt="">
                                                    <img class="position-absolute top-50 end-0 translate-middle-y" src="https://upload.wikimedia.org/wikipedia/ar/thumb/3/31/Spain_National_Football_Team_badge.png/800px-Spain_National_Football_Team_badge.png" alt="">
                                                </div>
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div class=" d-flex align-items-center">
                                                            NOV<br>25
                                                        </div>
                                                        <div class="ms-5">
                                                            <div>morocco vs canada</div>
                                                            <div>$ 150</div>
                                                            <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> Ahmed ben Ali staduim</div>
                                                        </div>

                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card ">
                                                <div class="position-relative">
                                                    <img class="card-img-top " alt="100%x280" src="https://img.freepik.com/premium-vector/football-2022-qatar-purple-background-isometric-vector-illustration_64478-1268.jpg">
                                                    <img class=" position-absolute top-50 start-0 translate-middle-y"  height="20px" src="https://www.nicepng.com/png/full/291-2914458_morocco-soccer-logo-morocco-national-football-team-logo.png" alt="">
                                                    <img class="position-absolute top-50 end-0 translate-middle-y" src="https://upload.wikimedia.org/wikipedia/ar/thumb/3/31/Spain_National_Football_Team_badge.png/800px-Spain_National_Football_Team_badge.png" alt="">
                                                </div>
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div class=" d-flex align-items-center">
                                                            NOV<br>25
                                                        </div>
                                                        <div class="ms-5">
                                                            <div>morocco vs canada</div>
                                                            <div>$ 150</div>
                                                            <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> Ahmed ben Ali staduim</div>
                                                        </div>

                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card ">
                                                <div class="position-relative">
                                                    <img class="card-img-top " alt="100%x280" src="https://img.freepik.com/premium-vector/football-2022-qatar-purple-background-isometric-vector-illustration_64478-1268.jpg">
                                                    <img class=" position-absolute top-50 start-0 translate-middle-y"  height="20px" src="https://www.nicepng.com/png/full/291-2914458_morocco-soccer-logo-morocco-national-football-team-logo.png" alt="">
                                                    <img class="position-absolute top-50 end-0 translate-middle-y" src="https://upload.wikimedia.org/wikipedia/ar/thumb/3/31/Spain_National_Football_Team_badge.png/800px-Spain_National_Football_Team_badge.png" alt="">
                                                </div>
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div class=" d-flex align-items-center">
                                                            NOV<br>25
                                                        </div>
                                                        <div class="ms-5">
                                                            <div>morocco vs canada</div>
                                                            <div>$ 150</div>
                                                            <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> Ahmed ben Ali staduim</div>
                                                        </div>

                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                
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

        <section class="pt-5 pb-5">
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


        <section class="pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between">
                        <h3 class="mb-3">Browse National Teams</h3>
                        <a href="#" class="d-flex align-items-center text-decoration-none" style="color: #8a1538;">
                                view all
                                <iconify-icon class="" icon="material-symbols:arrow-forward-ios-rounded" style="color: #8a1538;"></iconify-icon>
                        </a>
                    </div>
                    <div class="col-12 position-relative">
                        <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <?php for($i=0 ; $i<3 ; $i++): ?>
                                            <div class="col-md-4 mb-3">
                                                <div class="card ">
                                                    <img class="card-img-top" alt="100%x280" src="../assets/img/teams/<?php echo $teams[$i]->getImage() ?>">
                                                    <div class="card-body">
                                                            <div><?php echo $teams[$i]->getCountry() ?> National Teames</div>
                                                            <div>Group F</div>
                                                            <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> <?php echo $teams[$i]->getCountry() ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                                <?php for($i=3 ; $i<(count($teams)-2); $i+=3): ?>
                                    <div class="carousel-item">
                                        <div class="row">
                                            <?php for($j=$i ; $j<($i+3) ; $j++): ?>
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
                                <?php endfor; ?>
                                
                                
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

        <section class="pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between">
                        <h3 class="mb-3">Browse National Teams</h3>
                        <a href="#" class="d-flex align-items-center text-decoration-none" style="color: #8a1538;">
                                view all
                                <iconify-icon class="" icon="material-symbols:arrow-forward-ios-rounded" style="color: #8a1538;"></iconify-icon>
                        </a>
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

        






        <!-- JavaScript Bundle with Popper -->
    </body>
</html>
