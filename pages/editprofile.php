
<?php include"../include/header.php" ?>
<?php include"../include/navbar.php" ?>

<div class="alert alert-success m-4 text-center" role="alert">
  <h3 > Welcome in you profile! </h3> 
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="card m-3">
        <div class="card-body">
          <h2>
                Edit Profile
          </h2>
          <hr style="width: 13%; text-align: left; margin-left: 0" />
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