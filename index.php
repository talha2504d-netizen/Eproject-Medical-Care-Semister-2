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
</style>
</head>
<body>
<?php include("navbar.php"); ?>

<!-- Services Section -->
<h2>Services</h2>
<div class="card-section">
  <div class="card">
    <img src="Consult.png" alt="Consult Online">
    <h3>Consult Online Now</h3>
    <p>Instantly connect with our healthcare professionals through our secure platform.</p>
  </div>

  <div class="card">
    <img src="clinic.png" alt="Clinic Appointment">
    <h3>Clinic Appointment</h3>
    <p>Book an in-person visit to our clinic at your convenience.</p>
  </div>

  <div class="card">
    <img src="Laboratory.png" alt="Laboratory Tests">
    <h3>Laboratory Tests</h3>
    <p>Get your diagnostic tests done with our reliable laboratory services.</p>
  </div>

  <div class="card">
    <img src="Procedures.png" alt="Procedures & Surgeries">
    <h3>Procedures & Surgeries</h3>
    <p>Explore our range of medical procedures and surgical options.</p>
  </div>

  <div class="card">
    <img src="Medicines.png" alt="Medicines">
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

<?php include 'Footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>