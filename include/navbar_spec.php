<link rel="stylesheet" href="../assets/css/navbar.css">
<nav class="sticky-top navbar navbar-expand-lg bg-light">
  <div class="container-fluid ">
    <!-- d-flex justify-content-between -->
    <a class="fs-4 fw-bolder navbar-brand ms-4" href="#"> YouTickets</a>

    <iconify-icon class="open-nav navbar-toggler p-0" inline icon="ph:list-duotone"  data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color: #8a1538;" width="25" height="25"></iconify-icon>
    <iconify-icon class="close-nav navbar-toggler p-0" inline icon="ph:x-fill"  data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color: #8a1538;" width="25" height="25"></iconify-icon>

    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->

    <div class=" collapse navbar-collapse" id="navbarSupportedContent">
      <ul class=" navbar-nav nav justify-content-between me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active"  href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"  href="#">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"  href="#">Teams</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"  href="#">Contact</a>
        </li>
        <li class="nav-item ms-5">
          <span class="nav-link active"><i class="bi bi-person-circle"></i> Hello : <b class="logout"> SPEC </b></span>
        </li>
      </ul>
      <div class="d-flex me-4 logout-div">
        <a href="config/scripts.php?logout=1" name="logout" class="logout">  <i class="bi bi-box-arrow-right"></i><span> Logout </span></a>
      </div>
    </div>
  </div>
</nav>
