<?php include('db.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Search Results</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<?php include("navbar.php"); ?>

<div class="container mt-5">

<h2 class="text-center mb-4">Search Results</h2>

<form action="search.php" method="GET">

<div class="row">

    <div class="col-md-10">
        <input type="text"
               name="search"
               class="form-control"
               value="<?php echo $_GET['search'] ?? ''; ?>"
               placeholder="Search doctor or hospital">
    </div>

    <div class="col-md-2">
        <button class="btn btn-primary w-100">Search</button>
    </div>

</div>

</form>

<?php

if(isset($_GET['search'])){

    $search = mysqli_real_escape_string($conn, $_GET['search']);

    /* ================= HOSPITAL ================= */
    $hospital = mysqli_query($conn,
        "SELECT * FROM hospitals 
         WHERE name LIKE '%$search%' 
         OR specialties LIKE '%$search%'"
    );

    /* ================= DOCTOR ================= */
    $doctor = mysqli_query($conn,
        "SELECT * FROM doctors 
         WHERE name LIKE '%$search%' 
         OR specialization LIKE '%$search%'"
    );

    /* ================= HOSPITAL OUTPUT ================= */
    if(mysqli_num_rows($hospital) > 0){

        echo "<hr><h4>🏥 Hospitals</h4>";

        while($row = mysqli_fetch_assoc($hospital)){

            echo "
            <div class='card p-3 mb-3'>
                <div class='d-flex gap-3 align-items-center'>

                    <img src='{$row['image_url']}'
                         style='width:120px;height:80px;object-fit:cover;border-radius:10px;'>

                    <div>
                        <h5>{$row['name']}</h5>
                        <p>{$row['city']} | ⭐ {$row['rating']}</p>
                        <p>{$row['specialties']}</p>
                    </div>

                </div>
            </div>
            ";
        }
    }

    /* ================= DOCTOR OUTPUT ================= */
    if(mysqli_num_rows($doctor) > 0){

        echo "<hr><h4>👨‍⚕️ Doctors</h4>";

        while($row = mysqli_fetch_assoc($doctor)){

            echo "
            <div class='card p-3 mb-3'>
                <div class='d-flex gap-3 align-items-center'>

                    <img src='{$row['image_url']}'
                         style='width:90px;height:90px;border-radius:50%;object-fit:cover;'>

                    <div>
                        <h5>{$row['name']}</h5>
                        <p>{$row['city']}</p>
                        <p>{$row['specialization']} | {$row['experience']} Years</p>
                    </div>

                </div>
            </div>
            ";
        }
    }

    if(mysqli_num_rows($hospital) == 0 && mysqli_num_rows($doctor) == 0){
        echo "<p class='text-danger mt-3'>No results found</p>";
    }
}

?>

</div>

</body>
</html>