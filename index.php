<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<title>Care</title>

<style>
/* Horizontal card section */
.card-section {
  display: flex;
  flex-wrap: nowrap;
  overflow-x: auto;
  gap: 15px;
  padding: 20px 0;
}

/* Each card: 5 per row */
.card {
  flex: 0 0 calc(20% - 12px); /* 5 cards per row, gap considered */
  min-width: 150px;            /* minimum width for small screens */
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
  text-align: center;
  padding: 15px;
  box-sizing: border-box;
}

.card img {
  width: 80%;
  height: auto;
  margin: 0 auto 10px;
  display: block;
}

/* Round icons */
.round-card img {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  object-fit: cover;
  margin-bottom: 8px;
}

/* Headings */
h2, h3 {
  text-align: center;
  margin-top: 20px;
  margin-bottom: 15px;
  font-weight: bold;
  text-transform: capitalize;
}

h3 {
  font-size: 18px;
}





       /* news */
    body{
      background:#f5f5f5;
    }

    .news-card{
      border:none;
      border-radius:18px;
      overflow:hidden;
      box-shadow:0 5px 15px rgba(0,0,0,0.1);
      transition:0.3s;
    }

    .news-card:hover{
      transform:translateY(-8px);
    }

    .news-card img{
      width: 140px;
      height: 130px;
      border-radius:40px;
      
    }

    .news-date{
      font-size:14px;
      color:gray;
    }

    .btn-news{
      border-radius:25px;
      padding:8px 20px;
    }
        /* End */
  

</style>


</head>

<body>

<?php include("navbar.php"); ?>

<!-- Services Section -->
<h2>Services</h2>
<div class="card-section">
  <div class="card">
    <img src="images/Consult.png" alt="Consult Online">
    <h3>Consult Online Now</h3>
    <p>Instantly connect with our healthcare professionals through our secure platform.</p>
  </div>

  <div class="card">
    <img src="images/clinic.png" alt="Clinic Appointment">
    <h3>Clinic Appointment</h3>
    <p>Book an in-person visit to our clinic at your convenience.</p>
  </div>

  <div class="card">
    <img src="images/Laboratory.png" alt="Laboratory Tests">
    <h3>Laboratory Tests</h3>
    <p>Get your diagnostic tests done with our reliable laboratory services.</p>
  </div>

  <div class="card">
    <img src="images/Procedures.png" alt="Procedures & Surgeries">
    <h3>Procedures & Surgeries</h3>
    <p>Explore our range of medical procedures and surgical options.</p>
  </div>

  <div class="card">
    <img src="images/Medicines.png" alt="Medicines">
    <h3>Medicines</h3>
    <p>Find the medications you need with our wide selection.</p>
  </div>
</div>

<!-- Conditions Section -->
<h2>Conditions</h2>
<div class="card-section">
  <div class="card">
    <img src="https://d1t78adged64l7.cloudfront.net/specialty-icons3/skin-specialist.png?v=1775565218010" alt="Dermatologist">
    <h3>Dermatologist</h3>
  </div>

  <div class="card">
    <img src="https://d1t78adged64l7.cloudfront.net/specialty-icons3/gynecologist.png?v=1775565218010" alt="Gynecologist">
    <h3>Gynecologist</h3>
  </div>

  <div class="card">
    <img src="https://d1t78adged64l7.cloudfront.net/specialty-icons3/urologist.png?v=1775565218010" alt="Urologist">
    <h3>Urologist</h3>
  </div>

  <div class="card">
    <img src="https://d1t78adged64l7.cloudfront.net/specialty-icons3/gastroenterologist.png?v=1775565218010" alt="Gastroenterologist">
    <h3>Gastroenterologist</h3>
  </div>

  <div class="card">
    <img src="https://d1t78adged64l7.cloudfront.net/specialty-icons3/dentist.png?v=1775565218010" alt="Dentist">
    <h3>Dentist</h3>
  </div>
</div>

<!-- Search Doctor By Condition Section -->
<h2>Search doctor by condition</h2>
<div class="card-section">
  <div class="card round-card">
    <img src="https://d1t78adged64l7.cloudfront.net/dist/icons/conditions/v1/fever.png?v=1775565218010" alt="Fever">
    <h3>Fever</h3>
  </div>

  <div class="card round-card">
    <img src="https://d1t78adged64l7.cloudfront.net/dist/icons/conditions/v1/heart-attack.png?v=1775565218010" alt="Heart Attack">
    <h3>Heart Attack</h3>
  </div>

  <div class="card round-card">
    <img src="https://d1t78adged64l7.cloudfront.net/dist/icons/conditions/v1/pregnancy.png?v=1775565218010" alt="Pregnancy">
    <h3>Pregnancy</h3>
  </div>

  <div class="card round-card">
    <img src="https://d1t78adged64l7.cloudfront.net/dist/icons/conditions/v1/high-blood-pressure.png?v=1775565218010" alt="High Blood Pressure">
    <h3>High Blood Pressure</h3>
  </div>

  <div class="card round-card">
    <img src="https://d1t78adged64l7.cloudfront.net/dist/icons/conditions/v1/acne.png?v=1775565218010" alt="Acne">
    <h3>Acne</h3>
  </div>
</div>



   <!-- news -->

   <h3>As seen in news</h3>  

    <div class="container py-5">
    <div class="row g-4">

      <!-- News Card 1 -->
      <div class="col-md-4">
        <div class="card news-card">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNFB7oGxamk_aqUVkmPz4U2x7Ir2SaZw--yg&s" class="card-img-top" alt="News">
          
          <div class="card-body">
            <p class="news-date">14 May 2026</p>

            <p class="card-text">
              Geo News Pakistan ka famous news channel hai.  
              Yeh breaking news aur live updates provide karta hai.
            </p>

            <a href="#" class="btn btn-primary btn-news">
              Read More
            </a>
          </div>
        </div>
      </div>

      <!-- News Card 2 -->
      <div class="col-md-4">
        <div class="card news-card">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1IkviJZr952RziGUSRGjde0GlIDs45Zh0Lg&s" class="card-img-top" alt="News">

          <div class="card-body">
            <p class="news-date">14 May 2026</p>

            <p class="card-text">
              ARY News latest national aur international khabrein dikhata hai.  
              Yeh Pakistan ke popular news channels me se ek hai.
            </p>

            <a href="#" class="btn btn-success btn-news">
              Read More
            </a>
          </div>
        </div>
      </div>

      <!-- News Card 3 -->
      <div class="col-md-4">
        <div class="card news-card">
          <img src="https://mir-s3-cdn-cf.behance.net/projects/404/12326681.5482a6afd32d7.png" class="card-img-top" alt="News">

          <div class="card-body">
            <p class="news-date">14 May 2026</p>

            <p class="card-text">
              Pakistan me technology sector tezi se grow kar raha hai.  
              Naye startups aur AI tools market me introduce ho rahe hain.
            </p>

            <a href="#" class="btn btn-danger btn-news">
              Read More
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
     <!-- End -->

<?php include 'Footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>