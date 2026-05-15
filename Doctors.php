<?php

$conn = mysqli_connect("localhost", "root", "", "care");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

// search value
$search = isset($_GET['search']) ? $_GET['search'] : "";

// query
$sql = "SELECT * FROM doctors 
        WHERE name LIKE '%$search%' 
        OR specialization LIKE '%$search%'";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Find Doctors</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<?php include("navbar.php"); ?>

<div class="container mt-5">

    <h1 class="text-center mb-4">Find Doctors</h1>

    <?php if ($search != ""): ?>
        <p class="text-center text-muted">
            Search Result for: <b><?php echo $search; ?></b>
        </p>
    <?php endif; ?>

    <?php if (mysqli_num_rows($result) > 0) : ?>

        <?php while ($doctor = mysqli_fetch_assoc($result)) : ?>

            <div class="card mb-3 d-flex flex-row align-items-center mx-auto border-0 shadow-sm"
                 style="max-width: 1000px;">

                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwRCFnLvNz4hiLj7Nwt64EPJGc7k4la-HSBQ&s"
                     class="rounded-circle"
                     style="width:140px;height:140px;object-fit:cover;">

                <div class="card-body">

                    <h5><?php echo $doctor["name"]; ?></h5>

                    <p><?php echo $doctor["specialization"]; ?></p>

                    <p class="text-muted"><?php echo $doctor["degree"]; ?></p>

                    <div class="d-flex gap-4">

                        <div>
                            <h6><?php echo $doctor["experience"]; ?> yrs</h6>
                            <small>Experience</small>
                        </div>

                        <div>
                            <h6>⭐ 4.5</h6>
                            <small>Rating</small>
                        </div>

                    </div>

                </div>

                <div class="p-3">

                    <a href="#" class="btn btn-primary mb-2">Video Call</a>
                    <br>
                    <a href="#" class="btn btn-warning fw-bold">Book Appointment</a>

                </div>

            </div>

        <?php endwhile; ?>

    <?php else : ?>

        <h4 class="text-center text-danger">No Doctor Found</h4>

    <?php endif; ?>

</div>

</body>
</html>