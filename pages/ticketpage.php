<?php 
include_once '../scripts.php/landingpage.script.php';
include_once '../include/head.php';
include_once '../scripts.php/reservation.script.php';

if(!isset($_SESSION['name']))  header('location:../pages/signin.php');

// else if($_SESSION['roll'] !='spectator')  header('location:../pages/signin.php');
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="../assets/css/ticketspage.css">


    <?php
        if(!isset($_SESSION['name'])) include_once '../include/navbar_landingpage.php';
        else  include_once '../include/navbar_spec.php';
        $_SESSION['match-reserved-id'] = $_POST['match-id'];
        
    ?>  


    <div class="container">

        <div class=" container d-print-block   d-flex justify-content-center  flex-wrap  w-100 my-5  ">
            <div class="d-print-none  col-1 d-flex  flex-md-column align-items-sm-center ">
                <spain class=" d-md-block  my-2   text-center  " >Share </spain>
                <i class=" icon my-2 m-2 fa-solid fa-link"></i>
                <i class="icon my-2 m-2 fa-brands fa-square-instagram"></i>
                <i class="icon my-2 m-2 fa-brands fa-facebook"></i>
                <i class=" icon  my-2 m-2  fa-brands fa-square-twitter"></i>
            </div>
            <!-- col d-flex flex-column -->
            <div class=" col-12 col-md-11 d-flex flex-column " >
                <div  class="image-conatiner p-1 d-flex justify-content-center">
                    <div class="position-relative">
                        <img class=" img-fluid" src="../assets/img/general/card_background.png" alt="imagematch">
                        <img class="ms-4 w-25 img-fluid position-absolute top-50 start-0 translate-middle-y"   src="../assets/img/flag/<?=Matches::getMatch($_POST['match-id'])->getTeame_1_obj()->getLogo(); ?>" alt="teame1">
                        <img class="me-4 w-25 img-fluid position-absolute top-50 end-0 translate-middle-y"   src="../assets/img/flag/<?=Matches::getMatch($_POST['match-id'])->getTeame_2_obj()->getLogo(); ?>" alt="teame1">
                    </div>
                </div>
                <div class=" mt-4  d-flex justify-content-between flex-wrap ">
                    <div class="my-3  d-flex flex-column align-items-between ">


                        <h3 class=" "><?=Matches::getMatch($_POST['match-id'])->getTeame_1_obj()->getCountry()?> vs <?=Matches::getMatch($_POST['match-id'])->getTeame_2_obj()->getCountry(); ?></h3>
                        <div><i class=" my-1 py-2 mr-2 fa-solid fa-location-dot"></i><span><?=Matches::getMatch($_POST['match-id'])->getStaduim_obj()->getName(); ?></span></div>
                        <div><i class="  text-start mr-2 fa-solid fa-calendar-days"></i><span><?=Matches::getMatch($_POST['match-id'])->getDateTimeFormat(); ?></span></div>
                        <p class="my-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus debitis repudiandae non! Laborum</p>
                    </div>
                    <div class="row ">
                        <div class="col-lg-2 col-md-6 col-sm-12">
                            <div class=" card  " style="  width: 15rem;">
                                <div class="card-body">
                                    <h5 class=" text-center card-title">Tickets starting at</h5>
                                    <h6 class=" text-center card-subtitle mb-2 text-muted"><?=Matches::getMatch($_POST['match-id'])->getprice(); ?>$</h6>
                                    
                                    <div class="mb-2  d-flex align-items-center justify-content-around">
                                        <iconify-icon icon="icons8:buy" style="color: #8a1538;" width="40" height="40"></iconify-icon>
                                        <span id="ticket-reserved-counter" class="fw-bolder fs-4">0</span>
                                        

                                    </div>
                                    <button onclick="confirmNumberReserv()"  class="d-print-none border border-0 rounded  text-center btn-ticket w-100 " data-bs-toggle="modal" data-bs-target="#exampleModal" >Reserve your  E-Tickets</button>
                                    <button  onclick="printTicket()"  type="button" id="btn-print-ticket-id" class="d-print-none btn btn-warning w-100 mt-2">Print ticket</button>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="my-3 d-flex flex-column ">
                <h3 class=" ">Match Information</h3>
                <p>semi-final match</p>
                <h4 class="mt-3 ">Description</h4>
                <p><?=Matches::getMatch($_POST['match-id'])->getdescription(); ?></p>
                <h4 class="mt-3 ">Code of Match</h4>
                <p><?=Matches::getMatch($_POST['match-id'])->getCode(); ?></p>
                <h4 class="mt-3 ">Spectateur Name</h4>
                <p class="text-info fs-4"><?=$_SESSION['name']?> <?=$_SESSION['last-name'] ?></p>
            </div>
            <div class="my-2">
                <input class="d-print-none terms w-100  " type="text" placeholder="Terms & Condition">
            </div>

            </div>
        </div>


    </div>

    <div class="d-none d-print-block custom-shape-divider-top-1670985789">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>

    <div class="d-none d-print-block custom-shape-divider-bottom-1670985617">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>





<?php include '../include/footer.php';?>





    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm Your Reserve</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">ticket Number</span>
                    <input onkeyup="confirmNumberReserv()" type="number" id="ticket-reserved-number-id" require class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="modal-footer">
                    <button type="button" id="model-close-id" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button id="reserv-confirme-id" type="button" onclick="reserveMatch(<?=$_POST['match-id']?>)" id="btn-reserv-id" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>






<script src="../scripts.js/reservation.script.js"></script>

    