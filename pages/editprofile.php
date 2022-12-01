
<?php include"../include/header.php" ?>


<div class="justify-content-center">
    <h1>Edit Profile</h1>
  	<hr>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <h3>Personal info</h3>
        
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="Jane">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="Bishop">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Company:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="janesemail@gmail.com">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Time Zone:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select id="user_time_zone" class="form-control">
                  <option value="Hawaii">(GMT-10:00) Hawaii</option>
                  <option value="Alaska">(GMT-09:00) Alaska</option>
                  <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                  <option value="Arizona">(GMT-07:00) Arizona</option>
                  <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                  <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                  <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                  <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" value="janeuser">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="11111122333">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="11111122333">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>

-----------------------

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h2>
                Edit Profile
          </h2>
          <hr style="width: 20%; text-align: left; margin-left: 0" />
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
                        <label class="form-label" appTranslate="digitechApp.gouverneur.lastNameLatin" for="field_lastName"
                            >Last Name </label
                        >
                        <input
                            type="text"
                            class="form-control"
                            name="lastName"
                            id="lastName"
                        />
                    </div>
              </div>
              <div>
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
                 Save
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>











<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h2
            id="app-gouverneur-app-heading"
            data-cy="GouverneurCreateUpdateHeading"
            appTranslate="digitechApp.gouverneur.home.createOrEditLabel"
          >
            Create or edit a Gouverneur
          </h2>
          <hr style="width: 30%; text-align: left; margin-left: 0" />
          <br />
          <app-alert-error></app-alert-error>
          <form name="editForm" role="form" novalidate (ngSubmit)="save()" [formGroup]="editForm">
            <div class="row">
              <div class="col-md-6">
                <div class="mb-4">
                  <label class="form-label" appTranslate="digitechApp.gouverneur.firstNameLatin" for="field_firstNameLatin"
                    >First Name Latin</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    name="firstNameLatin"
                    id="field_firstNameLatin"
                    data-cy="firstNameLatin"
                    formControlName="firstNameLatin"
                  />
                </div>
                <div class="mb-4">
                  <label class="form-label" appTranslate="digitechApp.gouverneur.lastNameLatin" for="field_lastNameLatin"
                    >Last Name Latin</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    name="lastNameLatin"
                    id="field_lastNameLatin"
                    data-cy="lastNameLatin"
                    formControlName="lastNameLatin"
                  />
                </div>
                <div class="mb-4">
                  <label class="form-label" appTranslate="digitechApp.gouverneur.rol" for="field_rol">Rol</label>
                  <input type="text" class="form-control" name="rol" id="field_rol" data-cy="rol" formControlName="rol" />
                </div>
                <!--  <div class="row mb-4">
                      <label class="form-label" appTranslate="digitechApp.gouverneur.rol" for="field_rol">rol</label>
                      <select class="form-control" name="rol" formControlName="rol" id="field_rol" data-cy="rol">
                        <option [ngValue]="null">{{ 'digitechApp.GouverneurRol.null' | translate }}</option>
                        <option *ngFor="let gouverneurRol of gouverneurRolValues " [value]="gouverneurRol">
                          {{ 'digitechApp.GouverneurRol.' + gouverneurRol | translate }}
                        </option>
                      </select>
                    </div>-->
              </div>
              <div class="col-md-6">
                <div class="mb-4">
                  <label class="form-label" appTranslate="digitechApp.gouverneur.firstNameArabic" for="field_firstNameArabic"
                    >First Name Arabic</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    name="firstNameArabic"
                    id="field_firstNameArabic"
                    data-cy="firstNameArabic"
                    formControlName="firstNameArabic"
                  />
                </div>
                <div class="mb-4">
                  <label class="form-label" appTranslate="digitechApp.gouverneur.lastNameArabic" for="field_lastNameArabic"
                    >Last Name Arabic</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    name="lastNameArabic"
                    id="field_lastNameArabic"
                    data-cy="lastNameArabic"
                    formControlName="lastNameArabic"
                  />
                </div>
              </div>
              <div>
                <button
                  type="button"
                  id="cancel-save"
                  data-cy="entityCreateCancelButton"
                  class="btn btn-secondary"
                  (click)="previousState()"
                >
                  <fa-icon icon="ban"></fa-icon>&nbsp;<span appTranslate="entity.action.cancel">Cancel</span>
                </button>

                <button
                  type="submit"
                  id="save-entity"
                  data-cy="entityCreateSaveButton"
                  [disabled]="editForm.invalid || isSaving"
                  class="btn btn-primary"
                >
                  <fa-icon icon="save"></fa-icon>&nbsp;<span appTranslate="entity.action.save">Save</span>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include"../include/footer.php" ?>