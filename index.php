<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Care</title>

    <style>
      .card-container {
      display: flex;
      flex-direction: row;
      flex-wrap: nowrap;       /* Ye line break hone se rokega */
      gap: 10px;
      width: 100%;
      overflow-x: auto;        /* Agar screen choti ho toh scroll bar aa jaye, line break na ho */
      padding: 10px 0;
      }

      .card {
     flex: 0 0 calc(16.66% - 10px); /* 100% ko 6 se divide kiya aur gap minus kiya */
     min-width: 120px;              /* Taake mobile par cards bahut chhote na ho jayein */
     text-align: center;
     border: 0px solid #ccc;
     padding: 10px;
     box-sizing: border-box;        /* Padding ko width ke andar count karne ke liye */
     }

    .card img {
    width: 90%;
    height: auto;
    display: block;
    }


.card-containers {
  display: flex;
  flex-wrap: nowrap;      /* one line */
  justify-content: space-evenly;  /* proper equal spacing */
  align-items: center;
  padding: 20px;
  gap: 10px;
}

.cards {
  text-align: center;
  width: 120px;          /* same size for all */
  background: transparent; /* no border/background */
}

.cards img {
  width: 100%;
  height: auto;
  border-radius: 50%;    /* round icon */
  object-fit: cover;
  display: block;
  margin: 0 auto 8px;
}

 h2 {
  text-align: center;
  margin-top: 20px;
  font-size: 28px;
  font-weight: bold;
  text-transform: capitalize;
}
 
    </style>

</head>

<body>
    <!-- <?php
        include("navbar.php");
    ?> -->


   <h2>conditions</h2>
     

    <div class="card-container">

  <div class="card">
    <img src="https://d1t78adged64l7.cloudfront.net/specialty-icons3/skin-specialist.png?v=1775565218010" alt="Image 1">
    <h3>Dermatologist</h3>
  </div>
  
  <div class="card">
    <img src="https://d1t78adged64l7.cloudfront.net/specialty-icons3/gynecologist.png?v=1775565218010" alt="Image 2">
    <h3>Gynecologist</h3>
  </div>
  
  <div class="card">
    <img src="https://d1t78adged64l7.cloudfront.net/specialty-icons3/urologist.png?v=1775565218010" alt="Image 3">
    <h3>Urologist</h3>
  </div>

  <div class="card">
    <img src="https://d1t78adged64l7.cloudfront.net/specialty-icons3/gastroenterologist.png?v=1775565218010" alt="Image 4">
    <h3>Gastroenterologist</h3>
  </div>

  <div class="card">
    <img src="https://d1t78adged64l7.cloudfront.net/specialty-icons3/dentist.png?v=1775565218010" alt="Image 5">
    <h3>Dentist</h3>
  </div>

  <div class="card">
    <img src="https://d1t78adged64l7.cloudfront.net/specialty-icons3/obesity-specialist.png?v=1775565218010" alt="Image 6">
    <h3>Obesity specialist</h3>
  </div>

 </div>



  
    <div class="card-container">

  <div class="card">
    <img src="https://d1t78adged64l7.cloudfront.net/specialty-icons3/ent-specialist.png?v=1775565218010" alt="Image 7">
    <h3>ENT Specialist</h3>
  </div>
  
  <div class="card">
    <img src="https://d1t78adged64l7.cloudfront.net/specialty-icons3/orthopedic-surgeon.png?v=1775565218010" alt="Image 8">
    <h3>Orthopedic Surgeon</h3>
  </div>
  
  <div class="card">
    <img src="https://d1t78adged64l7.cloudfront.net/specialty-icons3/psychiatrist.png?v=1775565218010" alt="Image 9">
    <h3>Sexologist</h3>
  </div>

  <div class="card">
    <img src="https://d1t78adged64l7.cloudfront.net/specialty-icons3/neurologist.png?v=1775565218010" alt="Image 10">
    <h3>Neurologist</h3>
  </div>

  <div class="card">
    <img src="https://d1t78adged64l7.cloudfront.net/specialty-icons3/general-physician.png?v=1775565218010" alt="Image 11">
    <h3>Pulmonologist</h3>
  </div>

  <div class="card">
    <img src="https://d1t78adged64l7.cloudfront.net/specialty-icons3/child-specialist.png?v=1775565218010" alt="Image 12">
    <h3>Child Specialist</h3>
  </div>
 </div>

  <br>

  <br>

  
  <h2>Search doctor by condition</h2>
   
  <br>

   <br>
      <div class="card-containers">

  <div class="cards">
    <img src="https://d1t78adged64l7.cloudfront.net/dist/icons/conditions/v1/fever.png?v=1775565218010" alt="Image 1">
    <h3>ENT Specialist</h3>
  </div>
  
  <div class="cards">
    <img src="https://d1t78adged64l7.cloudfront.net/dist/icons/conditions/v1/heart-attack.png?v=1775565218010" alt="Image 2">
    <h3>Orthopedic Surgeon</h3>
  </div>
  
  <div class="cards">
    <img src="https://d1t78adged64l7.cloudfront.net/dist/icons/conditions/v1/pregnancy.png?v=1775565218010" alt="Image 3">
    <h3>Sexologist</h3>
  </div>

  <div class="cards">
    <img src="https://d1t78adged64l7.cloudfront.net/dist/icons/conditions/v1/high-blood-pressure.png?v=1775565218010" alt="Image 4">
    <h3>Neurologist</h3>
  </div>

  <div class="cards">
    <img src="https://d1t78adged64l7.cloudfront.net/dist/icons/conditions/v1/acne.png?v=1775565218010" alt="Image 5">
    <h3>Pulmonologist</h3>
  </div>

  <div class="cards">
    <img src="https://d1t78adged64l7.cloudfront.net/dist/icons/conditions/v1/diarrhea.png?v=1775565218010" alt="Image 6">
    <h3>Child Specialist</h3>
  </div>
 </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>