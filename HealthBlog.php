<?php
include("navbar.php");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Blog</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/HealthBlog.css">
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
            <img src="../images/Blog.webp" class="d-block w-100">
        </div>

        <div class="carousel-item">
            <img src="../images/Health.webp" class="d-block w-100">
        </div>

        <div class="carousel-item">
            <img src="../images/Articles.png" class="d-block w-100">
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

    <div class="row g-4 justify-content-center">

        <!-- CARD 1 -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card">
                <img src="../images/Healthy.jpg">
                <div class="card-body">
                    <h5>Healthy Lifestyle</h5>
                    <p>Tips to maintain a healthy</p>
                    <a href="../Healthblog/Healthy-life.php" class="btn btn-custom">Read More</a>
                </div>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card">
                <img src="../images/Exercise.png">
                <div class="card-body">
                    <h5>Daily Exercise</h5>
                    <p>Why exercise is important.</p>
                    <a href="#" class="btn btn-custom">Read More</a>
                </div>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card">
                <img src="../images/diet.jpg">
                <div class="card-body">
                    <h5>Balanced Diet</h5>
                    <p>Learn about healthy food.</p>
                    <a href="#" class="btn btn-custom">Read More</a>
                </div>
            </div>
        </div>

        <!-- CARD 4 -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card">
                <img src="../images/Mental.jpg">
                <div class="card-body">
                    <h5>Mental Health</h5>
                    <p>Take care of your mind.</p>
                    <a href="#" class="btn btn-custom">Read More</a>
                </div>
            </div>
        </div>

        <!-- CARD 5 -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card">
                <img src="../images/Sleep.jpg">
                <div class="card-body">
                    <h5>Better Sleep</h5>
                    <p>Improve sleep quality.</p>
                    <a href="#" class="btn btn-custom">Read More</a>
                </div>
            </div>
        </div>

        <!-- CARD 6 -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card">
                <img src="../images/Hydrated.jpg">
                <div class="card-body">
                    <h5>Stay Hydrated</h5>
                    <p>Drink enough water daily.</p>
                    <a href="#" class="btn btn-custom">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- DISEASES SECTION -->
<div class="container py-5">

    <h2 class="text-center mb-5">Diseases Articles</h2>

    <div class="row g-4 justify-content-center">

        <!-- CARD 1 -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card">
                <img src="../images/Diabetes.jpg">
                <div class="card-body">
                    <h5>Diabetes</h5>
                    <p>Learn symptoms and prevention of diabetes.</p>
                    <a href="#" class="btn btn-custom">Read More</a>
                </div>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card">
                <img src="../images/Heart.jpg">
                <div class="card-body">
                    <h5>Heart Disease</h5>
                    <p>Understand causes of heart diseases.</p>
                    <a href="#" class="btn btn-custom">Read More</a>
                </div>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card">
                <img src="../images/Fever.jpg">
                <div class="card-body">
                    <h5>Viral Fever</h5>
                    <p>Know about viral fever treatment.</p>
                    <a href="#" class="btn btn-custom">Read More</a>
                </div>
            </div>
        </div>

        <!-- CARD 4 -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card">
                <img src="../images/Asthma.png">
                <div class="card-body">
                    <h5>Asthma</h5>
                    <p>Breathing problems and asthma care tips.</p>
                    <a href="#" class="btn btn-custom">Read More</a>
                </div>
            </div>
        </div>

        <!-- CARD 5 -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card">
                <img src="../images/Cancer.jfif">
                <div class="card-body">
                    <h5>Cancer Awareness</h5>
                    <p>Important information about cancer.</p>
                    <a href="#" class="btn btn-custom">Read More</a>
                </div>
            </div>
        </div>

        <!-- CARD 6 -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card">
                <img src="../images/Covid-19.jfif">
                <div class="card-body">
                    <h5>COVID-19</h5>
                    <p>Safety precautions and symptoms guide.</p>
                    <a href="#" class="btn btn-custom">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- MEDICAL ADVANCEMENTS SECTION -->
<div class="container py-5">

    <h2 class="text-center mb-5">Medical Advancements</h2>

    <div class="row g-4 justify-content-center">

        <!-- CARD 1 -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card">
                <img src="../images/RoboticSurgery.jfif">
                <div class="card-body">
                    <h5>Robotic Surgery</h5>
                    <p>Modern robotic systems improving surgeries.</p>
                    <a href="#" class="btn btn-custom">Read More</a>
                </div>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card">
                <img src="../images/Healthcare.jfif">
                <div class="card-body">
                    <h5>AI in Healthcare</h5>
                    <p>Artificial intelligence helping doctors.</p>
                    <a href="#" class="btn btn-custom">Read More</a>
                </div>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card">
                <img src="../images/Vaccines.jfif">
                <div class="card-body">
                    <h5>New Vaccines</h5>
                    <p>Latest vaccine developments worldwide.</p>
                    <a href="#" class="btn btn-custom">Read More</a>
                </div>
            </div>
        </div>

        <!-- CARD 4 -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card">
                <img src="../images/telemedicine.jfif">
                <div class="card-body">
                    <h5>Telemedicine</h5>
                    <p>Online medical consultation technology.</p>
                    <a href="#" class="btn btn-custom">Read More</a>
                </div>
            </div>
        </div>

        <!-- CARD 5 -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card">
                <img src="../images/genetherapy.jfif">
                <div class="card-body">
                    <h5>Gene Therapy</h5>
                    <p>Advanced treatments using genetic science.</p>
                    <a href="#" class="btn btn-custom">Read More</a>
                </div>
            </div>
        </div>

        <!-- CARD 6 -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card">
                <img src="../images/wearable.jfif">
                <div class="card-body">
                    <h5>Wearable Devices</h5>
                    <p>Smart health tracking technology.</p>
                    <a href="#" class="btn btn-custom">Read More</a>
                </div>
            </div>
        </div>

    </div>
</div>



<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

<?php
include("Footer.php");
?>