
<link href="../assets/css/dashtest.css" rel="stylesheet" media="all">
<link rel="stylesheet" href="../assets/css/styleF.css">
<?php include"../include/head.php" ?>
<?php include"../include/navbar.php" ?>

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
                            <td>2018-09-29 05:57 PM</td>
                            <!-- <td>05:57</td> -->
                            <td class="text-right">morocco</td>
                            <td class="text-start">usa</td>
                            <td class="text-right">tamama</td>
                            <td>200$</td>
                        </tr>
                    </tbody>
                </table>
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
          <form action="" methode="POST">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-4">
                        <label class="form-label">First Name </label>
                        <input
                            type="text"
                            class="form-control"
                            name="firstName"
                            id="first-name"
                        />
                    </div>
                    <div class="mb-4">
                        <label class="form-label" >Email </label>
                        <input
                            type="text"
                            class="form-control"
                            name="firstName"
                            id="first-name"
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
                        />
                    </div>    
              </div>
              <div>
                <div class="">
                  <button
                    type="button"
                    id="cancel-save"
                    name="cancel_save"
                    class="btn btn-secondary"
                  >
                    Cancel
                  </button>

                  <button
                    type="submit"
                    id="save"
                    name="save"
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
                <hr style="width: 20%; text-align: left; margin-left: 0" />
                <div class="p text-secondary">
                  <i> Delete your account and all information related to your account such as your profile page, 
                      badges earned and leaderboard positions. 
                      Please be aware that all data will be permanently lost if you delete your account.
                  </i>
                </div>
                <div class="mt-3">
                  <button type="button" class="btn btn-danger btn-lg btn-block">Delete your account</button>
                </div>  
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

  
<?php include"../include/footer.php" ?>