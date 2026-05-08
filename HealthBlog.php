<?php
include("navbar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Blog</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #e0f7fa, #f8f9fa);
            font-family: 'Poppins', sans-serif;
        }

        h2 {
            font-weight: 600;
            color: #0d6efd;
        }

        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }

        /* CARD IMAGE FIX */
        .card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }

        /* BUTTON FIX */
        .btn-custom {
            background-color: #0d6efd !important;
            color: #fff !important;
            border: none !important;
            border-radius: 25px;
            padding: 6px 15px;
            font-size: 14px;
        }

        .btn-custom:hover {
            background-color: #0b5ed7 !important;
        }

        /* CAROUSEL FIX */
        .carousel-item img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .container {
            max-width: 1200px;
        }
    </style>
</head>

<body>

<!-- CAROUSEL -->
<div id="healthCarousel" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-indicators">
        <button type="button" data-bs-target="#healthCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#healthCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#healthCarousel" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="Blog.webp" class="d-block w-100">
        </div>

        <!-- FIXED (removed PHP file) -->
        <div class="carousel-item">
            <img src="Health.webp" class="d-block w-100">
        </div>

        <div class="carousel-item">
            <img src="Articles.png" class="d-block w-100">
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#healthCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#healthCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>

</div>

<!-- CONTENT -->
<div class="container py-5">
    <h2 class="text-center mb-5 mt-4">All Articles</h2>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card">
                <img src="Healthy.jpg">
                <div class="card-body">
                    <h5>Healthy Lifestyle</h5>
                    <p>Tips to maintain a healthy lifestyle.</p>
                    <a href=""><button class="btn-custom">Read More</button></a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="Exercise.png">
                <div class="card-body">
                    <h5>Daily Exercise</h5>
                    <p>Why exercise is important.</p>
                    <a href=""><button class="btn-custom">Read More</button></a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="diet.jpg">
                <div class="card-body">
                    <h5>Balanced Diet</h5>
                    <p>Learn about healthy food.</p>
                    <a href=""><button class="btn-custom">Read More</button></a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="Mental.jpg">
                <div class="card-body">
                    <h5>Mental Health</h5>
                    <p>Take care of your mind.</p>
                    <a href=""><button class="btn-custom">Read More</button></a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="Sleep.jpg">
                <div class="card-body">
                    <h5>Better Sleep</h5>
                    <p>Improve sleep quality.</p>
                    <a href=""><button class="btn-custom">Read More</button></a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="Hydrated.jpg">
                <div class="card-body">
                    <h5>Stay Hydrated</h5>
                    <p>Drink enough water daily.</p>
                    <a href=""><button class="btn-custom">Read More</button></a>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php
include("Footer.php");
?>