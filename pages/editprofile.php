

<?php include_once '../scripts.php/editepage.script.php';
include_once '../scripts.php/reservation.script.php' ?>
<!DOCTYPE html>
<html lang="en">
<body >

  <link href="../assets/css/dashtest.css" rel="stylesheet" media="all">
  <link rel="stylesheet" href="../assets/css/styleF.css">
  <?php include"../include/head.php" ?>

  <?php
        if(!isset($_SESSION['name'])) include_once '../include/navbar_landingpage.php';
        
        else  include_once '../include/navbar_spec.php';
    ?> 

<div class="alert alert-success m-4 text-center" role="alert">
  <h3 > Welcome in you Profile! </h3> 
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="card m-3">
        <div class="card-body">
          <div class="overview-wrap">
            <h2 class="title-1 m-b-25 me-4" id="old-reservation">Old reservations</h2>
            <hr class="w-25% my-2"/>
          </div>
            <br>
          <div class="table-responsive table--no-card mb-4" >
            <table class="table table-borderless table-striped table-earning" >
              <thead >
                <tr >
                  <th>Date-Time</th>
                  <th class="text-right">First team</th>
                  <th class="text-right">Secound team</th>
                  <th class="text-right">Stad</th>
                  <th>price</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>date</td>
                  <td class="text-right">maroc</td>
                  <td class="text-start">usa</td>
                  <td class="text-right"> stade  </td>
                  <td>200$</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="card m-3">
        <div class="card-body">
          <h2>
            Edit Profile
          </h2>
          <hr class="w-25%" />
          <br />
          <form action="../scripts.php/editepage.script.php" method="POST">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-4">
                        <input type="hidden" name="id">
                        <label class="form-label">First Name </label>
                        <input
                            type="text"
                            class="form-control"
                            name="firstName"
                            id="first-name"
                            value="<?=$obj->getFirstName()?>"
                        />
                    </div>
                    <div class="mb-4">
                        <label class="form-label" >Email </label>
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            id="email"
                            value="<?=$obj->getEmail()?>"
                        />
                    </div>
                </div>

              <div class="col-md-6">
              <div class="mb-4">
                        <label class="form-label" 
                            >Last Name </label
                        >
                        <input
                            type="text"
                            class="form-control"
                            name="lastName"
                            id="lastName"
                            value="<?=$obj->getLastName()?>"
                        />
                    </div>
                    <div class="mb-4">
                        <label class="form-label" 
                            >password</label
                        >
                        <input
                            type="password"
                            class="form-control"
                            name="password"
                            id="password"
                            value="<?=$obj->getPassword()?>"
                        />
                    </div>    
              </div>
              <div>
                <div class="">
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
                    id="save"
                    name="save_Changes"
                    class="btn btn-primary"
                  >
                  Save Changes
                  </button>
                </div>  
              </div>
              <div class="mt-3">   <hr>
                <div class="h2">
                  Delete Accounts
                </div>
                <hr style="width: 25%; text-align: left; margin-left: 0" />
                <div class="p text-secondary">
                  <i> Delete your account and all information related to your account such as your profile page,  
                      Please be aware that all data will be permanently lost if you delete your account.
                  </i>
                </div>
                <div class="mt-3">
                  <button 
                      type="button"
                      id="delete-count"
                      onclick="delete_count()"
                      class="btn btn-danger btn-lg btn-block"
                    >Delete your account
                  </button>
                </div>  
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="../assets/js/main.js"></script>
<?php include"../include/footer.php" ?>