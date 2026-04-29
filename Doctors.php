<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    
<?php
        include("navbar.php");
    $conn = mysqli_connect("localhost","root","","care_project");

    $query 
        
    ?>

    <h1 class="text-center" style="margin: 100px 0px;" >Find Doctors</h1>

    <div class="container">
        
        <?php foreach ( $doctors as $doctor ) : ?>

            <div class="card mb-3 d-flex flex-row align-items-center mx-auto border-bottom border-dark border-start-0 border-end-0 border-top-0 rounded-0" style="max-width: 1050px; margin: 150px 0px;" >

            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwRCFnLvNz4hiLj7Nwt64EPJGc7k4la-HSBQ&s" class="rounded-circle align-self-start" style="width: 150px; height: 150px; object-fit: cover; " alt="...">
            

            <div class="card-body ">


                <h5 class="card-title">Dr. <?= $doctor ["name"]?></h5>
                <p class="card-text"><?= $doctor ["speciality"]?></p>
                <p class="card-info">MBBS, FCPS (Dermatology), D-DERM </p>

               
                <div class="d-flex flex-row gap-3"> 
                    <div>
                        <h6><?= $doctor ["experience"]?></h6>
                        <p>Experience</p>
                    </div>
                
                    <div>  
                        <h6><?= $doctor ["stars"]?></h6>
                        <p><?= $doctor ["views"]?></p>
                    </div>
                </div>
            </div>

            <div> 
                <a href="#" class="btn btn-primary ">Video Consultation</a>
                <br><br>
                <a href="#" class="btn btn-warning fw-bold fs-6">Book Appointment</a>
            </div>
        </div>
                <?php endforeach; ?>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>