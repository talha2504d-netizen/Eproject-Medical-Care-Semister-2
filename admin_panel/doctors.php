<?php
    include "nav.php";
    include "../db.php";

/* ---------------------------
   HANDLE FORM SUBMISSION
---------------------------- */
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $speciality = $_POST["speciality"];
    $experience = $_POST["experience"];

    $stmt = $conn->prepare(
        "INSERT INTO doctors (name, speciality, experience) VALUES (?, ?, ?)"
    );
    $stmt->bind_param("ssi", $name, $speciality, $experience);
    $stmt->execute();

    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}


    $result = mysqli_query($conn,"SELECT id, name, speciality, experience FROM doctors;");

    // create array to hold all rows from db table as arrays
    $doctors = [];

    // using loop insert all arrays into parent array
    while ($row = mysqli_fetch_assoc($result)) {
        $doctors[] = $row;
    }
?>

<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap JS (needed for collapse) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<div class="container py-5">
    <!-- FRONT PANE WITH BUTTONS -->
    <div class="row">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="py-3">Manage Doctors</h2>

            <form action="doctors/create_doc.php" method="POST">
                <div class="btn-group " role="group" aria-label="Basic example">
                    <input type="submit" class="btn btn-secondary" name="create" value="Create" data-bs-toggle="collapse" data-bs-target="#createForm">
                    <button type="button" class="btn btn-secondary">Update</button>
                    <button type="button" class="btn btn-secondary">Delete</button>
                </div>
            </form>
        </div>
    </div>
    
    <!-- COLLAPSIBLE CREATE FORM -->
    <!-- <div class="collapse mt-3" id="createForm">
        <div class="card card-body">

            <form method="POST">,

                <div class="mb-2">
                    <input type="text" name="name" class="form-control" placeholder="Doctor's Name" required>
                </div>

                <div class="mb-2">
                    <input type="text" name="speciality" class="form-control" placeholder="Their Speciality" required>
                </div>

                <div class="mb-2">
                    <input type="number" name="experience" class="form-control" placeholder="And their Experience" required>
                </div>

                <button type="submit" class="btn btn-primary">
                    Save
                </button>

            </form>

        </div>
    </div> -->


    <table class="table">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Speciality</th>
                <th scope="col">Experience</th>
            </tr>
        </thead>
        <tbody>

            <!-- create rows of table using loop in PHP -->
            <?php foreach ($doctors as $doctor): ?>

                <tr id="<?= $doctor["id"] ?>">
                    <th><input type="checkbox" name="check"></th>
                    <th scope="row"><?= $doctor["id"] ?></th>
                    <td><?= $doctor["name"] ?></td>
                    <td><?= $doctor["speciality"] ?></td>
                    <td><?= $doctor["experience"] ?></td>
                    <td>
                        <form action="doctors/delete_doc.php" method="POST">
                            <input type="hidden" name="doc_id" value="<?= $doctor["id"] ?>">
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                    </td>

                </tr>

             <?php endforeach; ?>
        </tbody>
    </table>
</div>
