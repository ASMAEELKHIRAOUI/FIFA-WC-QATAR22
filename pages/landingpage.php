
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
                background-image: url('https://digitalhub.fifa.com/transform/11efbf28-c08e-4a13-958f-78685fbb8a80/Qatar-2022-s-32-teams-graphic');
                background-attachment: fixed;
                background-size: 100%;
                background-repeat: no-repeat;
                background-position: left top;
                ">
                <div class="header-content position-relative "  >
                    <div class="text-white">
                        <h1  class="titel mt-5 text-center ">Exclusive Matchs, priceless moments</h1>
                    </div>
                    <div class="position-absolute top-100 start-50 translate-middle bg-white border border-dark rounded-1" >
                        <div class="position-relative d-sm-block d-md-flex justify-content-between align-items-center" >
                            <div class="search-1 " style="min-width: 300px;"> 
                                <input type="text" placeholder="Search by match">
                            </div>
                            <div class="d-sm-block d-md-flex justify-content-between align-items-center ">
                                <div class="search-2 ">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="fw-semibold input-date ms-2" style="color: #8A1538;">start</span>
                                        <input class="form-control " placeholder="Select date" type="date" id="datePicker" >
                                    </div>
                                </div> 
                                <div class="search-2 ">
                                    <div class="d-flex align-items-center justify-content-between ">
                                        <span class="ms-2 fw-semibold input-date" style="color: #8A1538;">end</span> 
                                        <input class="form-control " placeholder="Select date" type="date" id="modal_date" >
                                    </div>
                                </div> 
                            </div>
                            <iconify-icon class="position-absolute top-0 end-0 mt-2 me-2 fs-3  " icon="ion:search-circle" style="color: #8a1538;" rotate="90deg"></iconify-icon>                                                

                        </div>
                    </div>
                </div>
            </div>
            <!-- Background image -->
        </header>




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
                                <div class="carousel-item">
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
                                <div class="carousel-item">
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
                                        <div class="col-md-4 mb-3">
                                            <div class="card ">
                                                <img class="card-img-top" alt="100%x280" src="https://i.ytimg.com/vi/PgtNCDpDJeA/sddefault.jpg">
                                                <div class="card-body">
                                                        <div>Morocco National Teames</div>
                                                        <div>Group F</div>
                                                        <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> Morocco</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card ">
                                                <img class="card-img-top" alt="100%x280" src="https://i.ytimg.com/vi/PgtNCDpDJeA/sddefault.jpg">
                                                <div class="card-body">
                                                        <div>Morocco National Teames</div>
                                                        <div>Group F</div>
                                                        <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> Morocco</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card ">
                                                <img class="card-img-top" alt="100%x280" src="https://i.ytimg.com/vi/PgtNCDpDJeA/sddefault.jpg">
                                                <div class="card-body">
                                                        <div>Morocco National Teames</div>
                                                        <div>Group F</div>
                                                        <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> Morocco</div>
                                                </div>
                                            </div>
                                        </div>
                                        

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="card ">
                                                <img class="card-img-top" alt="100%x280" src="https://i.ytimg.com/vi/PgtNCDpDJeA/sddefault.jpg">
                                                <div class="card-body">
                                                        <div>Morocco National Teames</div>
                                                        <div>Group F</div>
                                                        <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> Morocco</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card ">
                                                <img class="card-img-top" alt="100%x280" src="https://i.ytimg.com/vi/PgtNCDpDJeA/sddefault.jpg">
                                                <div class="card-body">
                                                        <div>Morocco National Teames</div>
                                                        <div>Group F</div>
                                                        <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> Morocco</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card ">
                                                <img class="card-img-top" alt="100%x280" src="https://i.ytimg.com/vi/PgtNCDpDJeA/sddefault.jpg">
                                                <div class="card-body">
                                                        <div>Morocco National Teames</div>
                                                        <div>Group F</div>
                                                        <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> Morocco</div>
                                                </div>
                                            </div>
                                        </div>
                                        

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="card ">
                                                <img class="card-img-top" alt="100%x280" src="https://i.ytimg.com/vi/PgtNCDpDJeA/sddefault.jpg">
                                                <div class="card-body">
                                                        <div>Morocco National Teames</div>
                                                        <div>Group F</div>
                                                        <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> Morocco</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card ">
                                                <img class="card-img-top" alt="100%x280" src="https://i.ytimg.com/vi/PgtNCDpDJeA/sddefault.jpg">
                                                <div class="card-body">
                                                        <div>Morocco National Teames</div>
                                                        <div>Group F</div>
                                                        <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> Morocco</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card ">
                                                <img class="card-img-top" alt="100%x280" src="https://i.ytimg.com/vi/PgtNCDpDJeA/sddefault.jpg">
                                                <div class="card-body">
                                                        <div>Morocco National Teames</div>
                                                        <div>Group F</div>
                                                        <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> Morocco</div>
                                                </div>
                                            </div>
                                        </div>
                                        

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
                                    <div class="row ">
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="card-img-top" alt="100%x280" src="https://www.arabianbusiness.com/cloud/2022/05/09/FIFA-World-Cup-2022-1.jpg">
                                                <div class="card-body">
                                                        <div>Khalifa International Stadium</div>
                                                        <div>capacity : <span>40,000</span></div>
                                                        <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> Doha</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card ">
                                                <img class="card-img-top" alt="100%x280" src="https://www.arabianbusiness.com/cloud/2022/05/09/FIFA-World-Cup-2022-1.jpg">
                                                <div class="card-body">
                                                        <div>Khalifa International Stadium</div>
                                                        <div>capacity : <span>40,000</span></div>
                                                        <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> Doha</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card ">
                                                <img class="card-img-top" alt="100%x280" src="https://www.arabianbusiness.com/cloud/2022/05/09/FIFA-World-Cup-2022-1.jpg">
                                                <div class="card-body">
                                                        <div>Khalifa International Stadium</div>
                                                        <div>capacity : <span>40,000</span></div>
                                                        <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> Doha</div>
                                                </div>
                                            </div>
                                        </div>
                                        

                                    </div>
                                </div>
                                <div class="carousel-item  ">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="card ">
                                                <img class="card-img-top" alt="100%x280" src="https://www.arabianbusiness.com/cloud/2022/05/09/FIFA-World-Cup-2022-1.jpg">
                                                <div class="card-body">
                                                        <div>Khalifa International Stadium</div>
                                                        <div>capacity : <span>40,000</span></div>
                                                        <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> Doha</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card ">
                                                <img class="card-img-top" alt="100%x280" src="https://www.arabianbusiness.com/cloud/2022/05/09/FIFA-World-Cup-2022-1.jpg">
                                                <div class="card-body">
                                                        <div>Khalifa International Stadium</div>
                                                        <div>capacity : <span>40,000</span></div>
                                                        <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> Doha</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card ">
                                                <img class="card-img-top" alt="100%x280" src="https://www.arabianbusiness.com/cloud/2022/05/09/FIFA-World-Cup-2022-1.jpg">
                                                <div class="card-body">
                                                        <div>Khalifa International Stadium</div>
                                                        <div>capacity : <span>40,000</span></div>
                                                        <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> Doha</div>
                                                </div>
                                            </div>
                                        </div>
                                        

                                    </div>
                                </div>
                                <div class="carousel-item  ">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="card ">
                                                <img class="card-img-top" alt="100%x280" src="https://www.arabianbusiness.com/cloud/2022/05/09/FIFA-World-Cup-2022-1.jpg">
                                                <div class="card-body">
                                                        <div>Khalifa International Stadium</div>
                                                        <div>capacity : <span>40,000</span></div>
                                                        <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> Doha</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card ">
                                                <img class="card-img-top" alt="100%x280" src="https://www.arabianbusiness.com/cloud/2022/05/09/FIFA-World-Cup-2022-1.jpg">
                                                <div class="card-body">
                                                        <div>Khalifa International Stadium</div>
                                                        <div>capacity : <span>40,000</span></div>
                                                        <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> Doha</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card ">
                                                <img class="card-img-top" alt="100%x280" src="https://www.arabianbusiness.com/cloud/2022/05/09/FIFA-World-Cup-2022-1.jpg">
                                                <div class="card-body">
                                                        <div>Khalifa International Stadium</div>
                                                        <div>capacity : <span>40,000</span></div>
                                                        <div> <iconify-icon icon="ri:map-pin-2-line"></iconify-icon> Doha</div>
                                                </div>
                                            </div>
                                        </div>
                                        

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

        






        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    </body>
</html>
