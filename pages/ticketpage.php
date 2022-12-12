<?php 
include_once '../include/navbar.php';
include_once '../scripts.php/landingpage.script.php';
include_once '../include/head.php';
include_once '../scripts.php/reservation.script.php';
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="../assets/css/ticketspage.css">
<?php include_once '../include/navbar.php';?>

    <div class="container">

        <div class=" container  d-flex justify-content-between  flex-wrap  w-100 my-5  ">
            <div class=" col-1 d-flex  flex-md-column align-items-sm-center ">
                <spain class=" d-none d-md-block  my-2   text-center  " >Share </spain>
                <i class="icon my-2 m-2 fa-solid fa-link"></i>
                <i class="icon my-2 m-2 fa-brands fa-square-instagram"></i>
                <i class="icon my-2 m-2 fa-brands fa-facebook"></i>
                <i class=" icon  my-2 m-2  fa-brands fa-square-twitter"></i>
            </div>
            <!-- col d-flex flex-column -->
            <div class="col-12 col-md-11 d-flex flex-column " >
                <div  class="image-conatiner p-1 d-flex justify-content-center">
                    <div class="position-relative">
                        <img class=" img-fluid" src="../assets/img/general/card_background.png" alt="imagematch">
                        <img class="ms-4 w-25 img-fluid position-absolute top-50 start-0 translate-middle-y"   src="../assets/img/flag/<?php echo $matches[$_POST['match-id']]->getTeame_1_obj()->getLogo(); ?>" alt="teame1">
                        <img class="me-4 w-25 img-fluid position-absolute top-50 end-0 translate-middle-y"   src="../assets/img/flag/<?php echo $matches[$_POST['match-id']]->getTeame_2_obj()->getLogo(); ?>" alt="teame1">
                    </div>
                    
                </div>
                <div class=" mt-4  d-flex justify-content-between flex-wrap  ">
                    <div class="my-3  d-flex flex-column align-items-between  ">
                        <h3 class=" "><?php echo $matches[$_POST['match-id']]->getTeame_1_obj()->getCountry(); ?> vs <?php echo $matches[$_POST['match-id']]->getTeame_2_obj()->getCountry(); ?></h3>
                        <div><i class=" my-1 py-2 mr-2 fa-solid fa-location-dot"></i><span><?php echo $matches[$_POST['match-id']]->getStaduim_obj()->getName(); ?></span></div>
                        <div><i class="  text-start mr-2 fa-solid fa-calendar-days"></i><span><?php echo $matches[$_POST['match-id']]->getDateTimeFormat(); ?></span></div>
                        <p class="my-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus debitis repudiandae non! Laborum</p>
                    </div>
                    <div class="row ">
                        <div class="col-lg-2 col-md-6 col-sm-12">
                            <div class=" card  " style="  width: 15rem;">
                                <div class="card-body">
                                    <h5 class=" text-center card-title">Tickets starting at</h5>
                                    <h6 class=" text-center card-subtitle mb-2 text-muted"><?php echo $matches[$_POST['match-id']]->getprice(); ?>$</h6>
                                    <div class="mb-2  d-flex align-items-center justify-content-around">
                                        <iconify-icon icon="icons8:buy" style="color: #8a1538;" width="40" height="40"></iconify-icon>
                                        <span id="ticket-reserved-counter" class="fw-bolder fs-4"><?=count(getRezerveMatch($matches[$_POST['match-id']]->getId()))?></span>
                                    </div>
                                    <button onclick="reserveMatch(<?=$_POST['match-id']?>)" class="border border-0 rounded  text-center btn-ticket w-100 " >Reserve your  E-Tickets</button>

                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="my-3 d-flex flex-column ">
                <h3 class=" ">Match Information</h3>
                <h4 class="mt-3 ">Description</h4>
                <p><?php echo $matches[$_POST['match-id']]->getdescription(); ?></p>
                </div>
                <div class="my-2">
                    <input class=" terms w-100  " type="text" placeholder="Terms & Condition">
                </div>

            </div>
        </div>
    </div>
    <?php include '../include/footer.php';?>

    <script src="../scripts.js/reservation.script.js"></script>


    

</body>
</html>