<?php
include '../include/head.php';
//include '../include/navbar.php';
?>

  

<!-- Bootstrap links-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Main CSS-->
    <link href="../assets/css/dashtest.css" rel="stylesheet" media="all">
</head>
<body>

<body class="animsition" >
 <!-- add match form -->
<div class="modal fade" id="modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="" method="POST" id="form" data-parsley-validate>
					<div class="modal-header">
						<h5 class="modal-title">New Match</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
			
							<input type="hidden" name="id" >

							<div class="mb-3">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>

                            <div class="mb-3">
								<label class="form-label">Date</label>
								<input type="datetime-local"  class="form-control" step="any" required/>
							</div>
							
							<!-- <div class="mb-3">
								<label class="form-label">Time</label>
								<input type="time"  class="form-control"  required/>
							</div> -->
							
                            <div class="mb-3">
								<label class="form-label">First team</label>
								<input type="text"  class="form-control"  required/>
							</div>

                            <div class="mb-3">
								<label class="form-label">Secound team</label>
								<input type="text"  class="form-control"  required/>
							</div>

                            <div class="mb-3">
								<label class="form-label">Stad</label>
								<input type="text"  class="form-control" id="task-date" required/>
							</div>
						
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white border" data-bs-dismiss="modal" id="cancel-btn">Cancel</a>
						<button type="submit" name="Add" class="color btn  text-light task-action-btn" id="save-btn">Add Match</button>
					</div>
				</form>
			</div>
		</div>
	</div>

    
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block" id="dashboard">
            <div class="menu-sidebar__content js-scrollbar1 ">
                <nav class="navbar-sidebar ">
                    <ul class="list-unstyled navbar__list ">
                    <li class="active has-sub">
                            <a href="landingpage.php" class="text-white text-decoration-none">
                                <i class="fa fa-futbol-o text-white "></i>Home</a>
                        </li>
                       <li class="active has-sub">
                            <a href="#statistiques" class="text-white text-decoration-none">
                                <i class="fa fa-futbol-o text-white "></i>Dashboard</a>
                        </li>
                        <li class="active has-sub">
                            <a href="#table-matches" class="text-white text-decoration-none">
                                <i class="fa fa-futbol-o text-white "></i>Matches List</a>
                        </li>
                        <li>
                            <a href="#table-teams" class="text-white text-decoration-none"><i class="fa fa-futbol-o text-white"></i>Teams List</a>
                        </li>
                        <li>
                            <a href="#table-stads" class="text-white text-decoration-none">
                                <i class="fa fa-futbol-o text-white"></i>Stads List</a>
                        </li>
                        
                        <li>
                            <a href="#table-reservations" class="text-white text-decoration-none">
                                <i class="fa fa-futbol-o text-white"></i>Reservations List</a>
                        </li>

                        <li>
                            <a href="#" class="text-white text-decoration-none">
                                <i class="fa fa-futbol-o text-white"></i>Log out</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
         
        <!-- PAGE CONTAINER-->
        <div class="page-container top-0">
        <!-- NAVBAR  -->
        <nav class="navbar fixed-top d-lg-none" id="color">
  <div class="container-fluid" >
    <a class="navbar-brand text-light" href="#">Offcanvas navbar</a>
    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon text-dark"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header" id="color">
        <h5 class="offcanvas-title text-light" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body" id="color">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="landingpage.php"><i class="fa fa-futbol-o text-white me-2"></i>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="#statistiques"><i class="fa fa-futbol-o text-white me-2"></i>Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="#table-matches"><i class="fa fa-futbol-o text-white me-2"></i>Matches List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="#table-teams"><i class="fa fa-futbol-o text-white me-2"></i>Team List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="#table-stads"><i class="fa fa-futbol-o text-white me-2"></i>Stad List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="#table-reservations"><i class="fa fa-futbol-o text-white me-2"></i>Reservations List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="#"><i class="fa fa-futbol-o text-white me-2"></i>Log out</a>
          </li>
      </div>
    </div>
  </div>
</nav>
        <!-- END OF NAVBAR -->

            <!-- Statistiques-->
            <div class="main-content pt-5">
                <div class="section__content section__content ">
                    <div class="container-fluid" >
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1 mt-2" id="statistiques">Statistiques</h2>
                                    <!-- <button class="au-btn au-btn-icon au-btn--blue rounded" id="color">
                                        <i class="zmdi zmdi-plus"></i>add item</button> -->
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-4" >
                                <div class="overview-item overview-item--c1 " id="color">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon mb-4">
                                                <i class="fa fa-futbol-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>36</h2>
                                                <span>Matches Played</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c1" id="color">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon mb-4">
                                                <i class="fa fa-futbol-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>8</h2>
                                                <span>Stadiums Available</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c1" id="color">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon mb-4">
                                                <i class="fa fa-users"></i>
                                            </div>
                                            <div class="text">
                                                <h2>103</h2>
                                                <span>Registered Spectators</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c1" id="color">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon mb-4">
                                                <i class="fa fa-ticket"></i>
                                            </div>
                                            <div class="text">
                                                <h2>368</h2>
                                                <span>e-tickets Available</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c1" id="color">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon mb-4">
                                                <i class="fa fa-ticket"></i>
                                            </div>
                                            <div class="text">
                                                <h2>103</h2>
                                                <span>Reserved e-tickets</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c1" id="color">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon mb-4">
                                                <i class="fa fa-ticket"></i>
                                            </div>
                                            <div class="text">
                                                <h2>98</h2>
                                                <span>Remaining e-tickets</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- table of matches -->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- <h2 class="title-1 m-b-25">Earnings By Items</h2> -->
                                <div class="overview-wrap">
                                    <h2 class="title-1 m-b-25 me-4" id="table-matches">All Matches</h2>
                                    <button class="btn me-3 logup text-light  rounded fs-5" href="#modal" data-bs-toggle="modal" id="color">
                                        <i class="fa fa-plus fs-5 me-2"></i>add match</button>
                                </div>

                                <br>
                                <div class="table-responsive table--no-card mb-4" >
                                    <table class="table table-borderless table-striped table-earning" >
                                        <thead >
                                            <tr >
                                                <th>Image</th>
                                                <th>Date-Time</th>
                                                <!-- <th>Time</th> -->
                                                <th class="text-right">First team</th>
                                                <th class="text-right">Secound team</th>
                                                <th class="text-right">Stad</th>
                                                <th class="text-right">Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>test</td>
                                                <td>2018-09-29 05:57 PM</td>
                                                <!-- <td>05:57</td> -->
                                                <td class="text-right">morocco</td>
                                                <td class="text-start">usa</td>
                                                <td class="text-right">tamama</td>
                                                <td class="text-right"><i class="fa fa-edit text-primary me-2"></i></td>
                                            </tr>
                                            <tr>
                                                <td>test</td>
                                                <td>2018-09-29 05:57 PM</td>
                                                <!-- <td>05:57</td> -->
                                                <td class="text-right">morocco</td>
                                                <td class="text-start">usa</td>
                                                <td class="text-right">tamama</td>
                                                <td class="text-right"><i class="fa fa-edit text-primary me-2"></i></td>
                                            </tr>
                                            <tr>
                                                <td>test</td>
                                                <td>2018-09-29 05:57 PM</td>
                                                <!-- <td>05:57</td> -->
                                                <td class="text-right">morocco</td>
                                                <td class="text-start">usa</td>
                                                <td class="text-right">tamama</td>
                                                <td class="text-right"><i class="fa fa-edit text-primary me-2"></i></td>
                                            </tr>

                                            <tr>
                                                <td>test</td>
                                                <td>2018-09-29 05:57 PM</td>
                                                <!-- <td>05:57</td> -->
                                                <td class="text-right">morocco</td>
                                                <td class="text-start">usa</td>
                                                <td class="text-right">tamama</td>
                                                <td class="text-right"><i class="fa fa-edit text-primary me-2"></i></td>
                                            </tr>

                                            <tr>
                                                <td>test</td>
                                                <td>2018-09-29 05:57 PM</td>
                                                <!-- <td>05:57</td> -->
                                                <td class="text-right">morocco</td>
                                                <td class="text-start">usa</td>
                                                <td class="text-right">tamama</td>
                                                <td class="text-right"><i class="fa fa-edit text-primary me-2"></i></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                     <!-- table of teames -->
                     <div class="row">
                            <div class="col-lg-12">
                                <!-- <h2 class="title-1 m-b-25">Earnings By Items</h2> -->
                                <div class="overview-wrap">
                                    <h2 class="title-1 m-b-25 me-4" id="table-teams">All Teams</h2>
                                    <button class="btn me-3 logup text-light  rounded fs-5" href="#modal" data-bs-toggle="modal" id="color">
                                        <i class="fa fa-plus fs-5 me-2"></i>add Team</button>
                                </div>
                        <br>
                                <div class="table-responsive table--no-card mb-4" >
                                    <table class="table table-borderless table-striped table-earning" >
                                        <thead >
                                            <tr >
                                                <th>Image</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th class="text-right">First team</th>
                                                <th class="text-right">Secound team</th>
                                                <th class="text-right">Stad</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>test</td>
                                                <td>2018-09-29</td>
                                                <td>05:57</td>
                                                <td class="text-right">morocco</td>
                                                <td class="text-start">usa</td>
                                                <td class="text-right">tamama</td>
                                            </tr>
                                            <tr>
                                                <td>test</td>
                                                <td>2018-09-29</td>
                                                <td>05:57</td>
                                                <td class="text-right">morocco</td>
                                                <td class="text-start">usa</td>
                                                <td class="text-right">tamama</td>
                                            </tr>
                                            <tr>
                                                <td>test</td>
                                                <td>2018-09-29</td>
                                                <td>05:57</td>
                                                <td class="text-right">morocco</td>
                                                <td class="text-start">usa</td>
                                                <td class="text-right">tamama</td>
                                            </tr>

                                            <tr>
                                                <td>test</td>
                                                <td>2018-09-29</td>
                                                <td>05:57</td>
                                                <td class="text-right">morocco</td>
                                                <td class="text-start">usa</td>
                                                <td class="text-right">tamama</td>
                                            </tr>

                                            <tr>
                                                <td>test</td>
                                                <td>2018-09-29</td>
                                                <td>05:57</td>
                                                <td class="text-right">morocco</td>
                                                <td class="text-start">usa</td>
                                                <td class="text-right">tamama</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- table of stads -->
                     <div class="row">
                            <div class="col-lg-12">
                                <!-- <h2 class="title-1 m-b-25">Earnings By Items</h2> -->
                                <div class="overview-wrap">
                                    <h2 class="title-1 m-b-25 me-4" id="table-stads">All Stads</h2>
                                    <button class="btn me-3 logup text-light  rounded fs-5" href="#modal" data-bs-toggle="modal" id="color">
                                        <i class="fa fa-plus fs-5 me-2"></i>add stad</button>
                                </div>
                        <br>
                                <div class="table-responsive table--no-card mb-4" >
                                    <table class="table table-borderless table-striped table-earning" >
                                        <thead >
                                            <tr >
                                                <th>Image</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th class="text-right">First team</th>
                                                <th class="text-right">Secound team</th>
                                                <th class="text-right">Stad</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>test</td>
                                                <td>2018-09-29</td>
                                                <td>05:57</td>
                                                <td class="text-right">morocco</td>
                                                <td class="text-start">usa</td>
                                                <td class="text-right">tamama</td>
                                            </tr>
                                            <tr>
                                                <td>test</td>
                                                <td>2018-09-29</td>
                                                <td>05:57</td>
                                                <td class="text-right">morocco</td>
                                                <td class="text-start">usa</td>
                                                <td class="text-right">tamama</td>
                                            </tr>
                                            <tr>
                                                <td>test</td>
                                                <td>2018-09-29</td>
                                                <td>05:57</td>
                                                <td class="text-right">morocco</td>
                                                <td class="text-start">usa</td>
                                                <td class="text-right">tamama</td>
                                            </tr>

                                            <tr>
                                                <td>test</td>
                                                <td>2018-09-29</td>
                                                <td>05:57</td>
                                                <td class="text-right">morocco</td>
                                                <td class="text-start">usa</td>
                                                <td class="text-right">tamama</td>
                                            </tr>

                                            <tr>
                                                <td>test</td>
                                                <td>2018-09-29</td>
                                                <td>05:57</td>
                                                <td class="text-right">morocco</td>
                                                <td class="text-start">usa</td>
                                                <td class="text-right">tamama</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- table of reservations -->
                     <div class="row">
                            <div class="col-lg-12">
                                <!-- <h2 class="title-1 m-b-25">Earnings By Items</h2> -->
                                <div class="overview-wrap">
                                    <h2 class="title-1 m-b-25 me-4" id="table-reservations">All Reservations</h2>
                                    <button class="btn me-3 logup text-light  rounded fs-5" href="#modal" data-bs-toggle="modal" id="color">
                                        <i class="fa fa-plus fs-5 me-2"></i>add reservation</button>
                                </div>
                        <br>
                                <div class="table-responsive table--no-card mb-4" >
                                    <table class="table table-borderless table-striped table-earning" >
                                        <thead >
                                            <tr >
                                                <th>Image</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th class="text-right">First team</th>
                                                <th class="text-right">Secound team</th>
                                                <th class="text-right">Stad</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>test</td>
                                                <td>2018-09-29</td>
                                                <td>05:57</td>
                                                <td class="text-right">morocco</td>
                                                <td class="text-start">usa</td>
                                                <td class="text-right">tamama</td>
                                            </tr>
                                            <tr>
                                                <td>test</td>
                                                <td>2018-09-29</td>
                                                <td>05:57</td>
                                                <td class="text-right">morocco</td>
                                                <td class="text-start">usa</td>
                                                <td class="text-right">tamama</td>
                                            </tr>
                                            <tr>
                                                <td>test</td>
                                                <td>2018-09-29</td>
                                                <td>05:57</td>
                                                <td class="text-right">morocco</td>
                                                <td class="text-start">usa</td>
                                                <td class="text-right">tamama</td>
                                            </tr>

                                            <tr>
                                                <td>test</td>
                                                <td>2018-09-29</td>
                                                <td>05:57</td>
                                                <td class="text-right">morocco</td>
                                                <td class="text-start">usa</td>
                                                <td class="text-right">tamama</td>
                                            </tr>

                                            <tr>
                                                <td>test</td>
                                                <td>2018-09-29</td>
                                                <td>05:57</td>
                                                <td class="text-right">morocco</td>
                                                <td class="text-start">usa</td>
                                                <td class="text-right">tamama</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

    <!-- Js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>



