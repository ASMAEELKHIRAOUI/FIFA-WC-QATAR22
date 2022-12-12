  <!-- <link rel="stylesheet" type="text/css" href="../assets/css/styleF.css" media="print">
  <?php include"../include/head.php" ?>

<body >
    <div class="row">
        <div class="custom-shape-divider-top-1670835323 col-sm-md-lg">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" 
                      class="shape-fill">
                    </path>
            </svg>
        </div>
    </div>
    <div class="row justify-content-between mt-5">
        <div class="col-6 mt-5">
            <p>
                <h1>first name</h1>
                <h1>last  name</h1>
                <h1>number of ticket</h1>
                <h1>Price</h1>
            </p>
        </div>  
        <div class="col-6 img">
            <img src="../assets/img/general/ticket.png" alt="pecture of world cup 2022">
        </div> 
    </div>
    <hr>
    <div class="row justify-content-center">
        <div class="col-12">
            <button
                        type="submit"
                        id="cancel-save"
                        name="cancel_save"
                        class="btn btn-secondary"
                    >
                        Cancel
            </button>
            <button
                        type="submit"
                        id="#print-btn"
                        onclick="window.print();"
                        class="btn btn-primary"
                    >
                    print your ticket
            </button>
        </div>
    </div>    

</body>
</html> -->


























<?php 
include_once '../include/navbar.php';
include_once '../scripts.php/landingpage.script.php';
include_once '../include/head.php';
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
                        <img class="ms-4 w-25 img-fluid position-absolute top-50 start-0 translate-middle-y"   src="../assets/img/flag/moroccot.jpg" alt="teame1">
                        <img class="me-4 w-25 img-fluid position-absolute top-50 end-0 translate-middle-y"   src="../assets/img/flag/francet.jpg" alt="teame2">
                    </div>
                    
                </div>
                <div class=" mt-4  d-flex justify-content-between flex-wrap  ">
                    <div class="my-3  d-flex flex-column align-items-between  ">
                        <h3 class=""> morocco vs france</h3>
                        <div><i class=" my-1 py-2 mr-2 fa-solid fa-location-dot"></i><span></span></div>
                        <div><i class="  text-start mr-2 fa-solid fa-calendar-days"></i><span></span></div>
                        <p class="my-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus debitis repudiandae non! Laborum</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    

</body>
</html>