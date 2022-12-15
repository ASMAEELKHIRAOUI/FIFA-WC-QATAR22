<?php
include '../include/head.php';
include_once '../scripts.php/crudadmin.script.php';
include_once '../classes/match.class.php';
include_once '../classes/stad.class.php';
include '../classes/spectateur.class.php';


    // if(!isset($_SESSION['name']))  header('location:../pages/signin.php');

    // else if($_SESSION['roll'] !='admin')  header('location:../pages/landingpage.php');
    

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
				<form action="../scripts.php/crudadmin.script.php" method="POST" id="form" data-parsley-validate>
					<div class="modal-header">
						<h5 class="modal-title">New Match</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
			
							<input type="hidden" name="id" >

                            <div class="mb-3">
								<label class="form-label">Date</label>
								<input type="datetime-local" name="Datetime"  class="form-control"  required/>
							</div>
							
                            <div class="mb-3">
								<label class="form-label">First team</label>
                                <select class="form-select" name="Team1" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <?php foreach($teams as $team):?>
                                        <option value="<?php echo $team->getId(); ?>"><?php echo $team->getCountry(); ?> </option>
                                    <?php endforeach;?>
                                </select>
							</div>

                            <div class="mb-3">
								<label class="form-label">Second team</label>
								<select class="form-select" name="Team2" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <?php foreach($teams as $team):?>
                                        <option value="<?php echo $team->getId(); ?>"><?php echo $team->getCountry(); ?> </option>
                                    <?php endforeach;?>
                                </select>
							</div>

                            <div class="mb-3">
								<label class="form-label">Stad</label>
								<select class="form-select" name="Stade" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <?php  foreach( $stads as $stad ) :   ?>
                                    <option value="<?php  echo $stad->getId(); ?>"><?php echo $stad->getName(); ?></option>
                                    <?php endforeach; ?>
                                </select>
                                
							</div>

                            <div class="mb-3">
								<label class="form-label">Price</label>
								<input type="number" name="Prix" class="form-control" step="any" id="task-date" required/>
							</div>

                            <div class="mb-3">
                                <label class="form-label">Description</label>
								<textarea class="form-control" name="Description" rows="3" required></textarea>
							</div>
						
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white border" data-bs-dismiss="modal" id="cancel-btn">Cancel</a>
						<button type="submit" name="SaveMatch" class="color btn  text-light task-action-btn" id="save-btn">Add Match</button>
					</div>
				</form>
			</div>
		</div>
	</div>

<!-- add team form -->
<div class="modal fade" id="modal-teams">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="../scripts.php/crudadmin.script.php" method="POST" id="form" data-parsley-validate>
					<div class="modal-header">
						<h5 class="modal-title">New Team</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
			
							<input type="hidden" name="id" >

                            <div class="mb-3">
								<label class="form-label">Country</label>
								<input type="text" name="Country"  class="form-control"  required/>
							</div>

                            <div class="mb-3">
								<label class="form-label">Coach</label>
								<input type="text" name="Coach"  class="form-control"  required/>
							</div>

							<div class="mb-3">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" name="Image" type="file" id="formFile">
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Logo</label>
                                <input class="form-control" name="Logo" type="file" id="formFile">
                            </div>
						
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white border" data-bs-dismiss="modal" id="cancel-btn">Cancel</a>
						<button type="submit" name="SaveTeam" class="color btn  text-light task-action-btn" id="save-btn">Add Team</button>
					</div>
				</form>
			</div>
		</div>
	</div>

    <!-- add stad form -->
<div class="modal fade" id="modal-stad">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="../scripts.php/crudadmin.script.php " method="POST" id="form" data-parsley-validate>
					<div class="modal-header">
						<h5 class="modal-title">New Stad</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
			
							<input type="hidden" name="id" >

                            <div class="mb-3">
								<label class="form-label">Name</label>
								<input type="text" name="Name"  class="form-control"  required/>
							</div>

                            <div class="mb-3">
								<label class="form-label">Capacity</label>
								<input type="text" name="Capacity"  class="form-control"  required/>
							</div>

							<div class="mb-3">
								<label class="form-label">Location</label>
								<input type="text" name="Location"  class="form-control"  required/>
							</div>

                            <div class="mb-3">
								<label class="form-label">City</label>
								<input type="text" name="City"  class="form-control"  required/>
							</div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" name="image" type="file" id="formFile">
                            </div>
						
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white border" data-bs-dismiss="modal" id="cancel-btn">Cancel</a>
						<button type="submit" name="SaveStad" class="color btn  text-light task-action-btn" id="save-btn">Add stad</button>
					</div>
				</form>
			</div>
		</div>
	</div>

    <!-- add reservation form -->
<div class="modal fade" id="modal-reservation">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="" method="POST" id="form" data-parsley-validate>
					<div class="modal-header">
						<h5 class="modal-title">New Reservation</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
			
							<input type="hidden" name="id" >

                            <div class="mb-3">
								<label class="form-label">Match</label>
								<select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
							</div>

                            <div class="mb-3">
								<label class="form-label">User</label>
								<select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
							</div>
						
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white border" data-bs-dismiss="modal" id="cancel-btn">Cancel</a>
						<button type="submit" name="Add" class="color btn  text-light task-action-btn" id="save-btn">Add Reservation</button>
					</div>
				</form>
			</div>
		</div>
	</div>

    
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block" id="dashboard">
            <div class="menu-sidebar__content js-scrollbar1 ">
                <nav class="navbar-sidebar pt-2">
                    <ul class="list-unstyled navbar__list ">
                    <li class="active has-sub">
                            <a href="landingpage.php" class="text-white text-decoration-none">
                                <i class="fa fa-user text-white fs-3 me-2"></i>Welcome <?php echo $_SESSION['name'] ?></a>
                        </li>
                    <li class="active has-sub">
                            <a href="landingpage.php" class="text-white text-decoration-none">
                                <i class="fa fa-home text-white "></i>Home</a>
                        </li>
                        <li class="active has-sub">
                            <a href="#statistiques" class="text-white text-decoration-none">
                                <i class="fa fa-tachometer text-white "></i>Statistiques</a>
                        </li>
                        <li class="active has-sub">
                            <a href="#table-matches" class="text-white text-decoration-none">
                                <i class="fa fa-futbol-o text-white "></i>Matches List</a>
                        </li>
                        <li>
                            <a href="#table-teams" class="text-white text-decoration-none"><i class="fa fa-users text-white"></i>Teams List</a>
                        </li>
                        <li>
                            <a href="#table-stads" class="text-white text-decoration-none">
                                <i class="fa fa-fort-awesome text-white"></i>Stads List</a>
                        </li>
                        
                        <li>
                            <a href="#table-reservations" class="text-white text-decoration-none">
                                <i class="fa fa-ticket text-white"></i>Reservations List</a>
                        </li>

                        <li>
                            <a href="../scripts.php/logout.script.php?&action=logOut" class="text-white text-decoration-none">
                                <i class="fa fa-sign-out text-white"></i>Log out</a>
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
    <!-- <a class="navbar-brand text-light" href="#">Offcanvas navbar</a> -->
    <a href="landingpage.php" class="text-white text-decoration-none"><i class="fa fa-user text-white fs-3 me-2"></i>Welcome <?php echo $_SESSION['name'] ?></a>
    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon text-dark"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header" id="color">
        <h5 class="offcanvas-title text-light" id="offcanvasNavbarLabel"><i class="fa fa-user text-white fs-3 me-2"></i><?php echo $_SESSION['name'] ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body" id="color">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="landingpage.php"><i class="fa fa-futbol-o text-white me-2"></i>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="#statistiques"><i class="fa fa-tachometer text-white me-2"></i>Statistiques</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="#table-matches"><i class="fa fa-futbol-o text-white me-2"></i>Matches List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="#table-teams"><i class="fa fa-users text-white me-2"></i>Team List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="#table-stads"><i class="fa fa-fort-awesome text-white me-2"></i>Stad List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="#table-reservations"><i class="fa fa-ticket text-white me-2"></i>Reservations List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="../scripts.php/logout.script.php?&action=logOut"><i class="fa fa-sign-out text-white me-2"></i>Log out</a>
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
                                                <i class="fa fa-fort-awesome"></i>
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
                                                <i class="fa fa-user"></i>
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
                                                <th class="text-right">Date-Time</th>
                                                <th class="text-right">First team</th>
                                                <th class="text-right">Second team</th>
                                                <th class="text-right">Stad</th>
                                                <th class="text-right">Price</th>
                                                <th class="text-right">Description</th>
                                                <th class="text-right"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($matchs as $match):?>
                                                <tr>
                                                    <td class="text-right"><?php echo $match->getDateTimeFormat();?></td>
                                                    <!-- <td>05:57</td> -->
                                                    <td class="text-right"><?php echo $match->getTeame_1_obj()->getCountry();?></td>
                                                    <td class="text-start"><?php echo $match->getTeame_2_obj()->getCountry();?></td>
                                                    <td class="text-right"><?php echo $match->getStaduim_obj()->getName();?></td>
                                                    <td class="text-right"><?php echo $match->getprice(); ?> $</td>
                                                    <td class="text-right"><?php echo $match->getdescription();?></td>
                                                    <td class="text-left"><a href="update.match.php"><i class="fa fa-edit text-primary me-2"></i></a></td>
                                                </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                     <!-- table of teames -->
                     <div class="row">
                            <div class="col-lg-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1 m-b-25 me-4" id="table-teams">All Teams</h2>
                                    <button class="btn me-3 logup text-light  rounded fs-5" href="#modal-teams" data-bs-toggle="modal" id="color">
                                        <i class="fa fa-plus fs-5 me-2"></i>add Team</button>
                                </div>
                        <br>
                                <div class="table-responsive table--no-card mb-4" >
                                    <table class="table table-borderless table-striped table-earning" >
                                        <thead >
                                            <tr >
                                                <th class="text-right">Image</th>
                                                <th class="text-right">Logo</th>
                                                <th class="text-right">Country</th>
                                                <th class="text-right">Coach</th>
                                                <th class="text-left"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($teams as $team ):?>
                                            <tr>
                                                <td class="text-right"><img style="width:5rem" src="../assets/img/teams/<?php echo $team->getImage();?>"> </td>
                                                <td class="text-right"><img style="width:5rem" src="../assets/img/flag/<?php echo $team->getLogo();?>"> </td>
                                                <td class="text-right"><?php echo $team->getCountry();?></td>
                                                <td class="text-right"><?php echo $team->getCoatch(); ?></td>
                                                <td class="text-left"><a href="update.team.php"><i class="fa fa-edit text-primary me-2"></i></a></td>
                                            </tr>
                                            <?php endforeach; ?>
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
                                    <button class="btn me-3 logup text-light  rounded fs-5" href="#modal-stad" data-bs-toggle="modal" id="color">
                                        <i class="fa fa-plus fs-5 me-2"></i>add stad</button>
                                </div>
                        <br>
                                <div class="table-responsive table--no-card mb-4" >
                                    <table class="table table-borderless table-striped table-earning" >
                                        <thead >
                                            <tr >
                                                <th class="text-right">Image</th>
                                                <th class="text-right">Name</th>
                                                <th class="text-right">Capacity</th>
                                                <th class="text-right">Location</th>
                                                <th class="text-right">City</th>
                                                <th class="text-left"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($stads as $stad):   ?>
                                            <tr>
                                                
                                                <td class="text-start"><img style="width:5rem" src="../assets/img/stad/<?php echo $stad->getImage();?>" alt=""></td>
                                                <td class="text-right"><?php echo $stad->getName();?></td>
                                                <td class="text-right"><?php echo $stad->getCapacity();?></td>
                                                <td class="text-right"><?php echo $stad->getLocation();?></td>
                                                <td class="text-right"><?php echo $stad->getCity();?></td>
                                                
                                                <td class="text-left"><a href="update.stad.php"><i class="fa fa-edit text-primary me-2"></i></a></td>
                                            </tr>
                                            <?php endforeach; ?>
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
                                    <button class="btn me-3 logup text-light  rounded fs-5" href="#modal-reservation" data-bs-toggle="modal" id="color">
                                        <i class="fa fa-plus fs-5 me-2"></i>add reservation</button>
                                </div>
                        <br>
                                <div class="table-responsive table--no-card mb-4" >
                                    <table class="table table-borderless table-striped table-earning" >
                                        <thead >
                                            <tr >
                                                <th class="text-right">Match</th>
                                                <th class="text-right">User</th>
                                                <th class="text-right">Prix</th>
                                                <th class="text-left"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-right">morocco vs portogal</td>
                                                <td class="text-right">test user</td>
                                                <td class="text-right">19.57$</td>
                                                <td class="text-left"><i class="fa fa-edit text-primary me-2"></i></td>
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