<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<head>
        <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>

<?php include "nav.php"; ?>
<!--
<div>
    <h3>Patients for the Month ___</h3>
</div> -->

<div class="container">
  <div class="row bg-light my-5 py-3">
      <div class="col">
        <h5 class="text-center">Top 3 Doctors booked</h5>
        <ol class="list-group list-group-numbered p-3">
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Subheading</div>
                    Content for list item
                </div>    
            </li>
        </ol>
      </div>

      <div class="col">
        <h5 class="text-center">Top 3 Conditions</h5>
        <ol class="list-group list-group-numbered p-3">
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Subheading</div>
                    Content for list item
                </div>    
            </li>
        </ol>
      </div>

      <div class="col">
        <h5 class="text-center">Top 3 Hospitals Visited</h5>
        <ol class="list-group list-group-numbered p-3">
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Subheading</div>
                    Content for list item
                </div>    
            </li>
        </ol>
      </div>

      <div class="col">
        <h5 class="text-center">Revenue Generated</h5>
        <ol class="list-group list-group-numbered p-3">
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Subheading</div>
                    Content for list item
                </div>    
            </li>
        </ol>
      </div>
    
  </div>


  <div class="row">
    <div class="col-sm-6 mb-3 mb-sm-0">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>

</div>
