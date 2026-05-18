<?php
include "../db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $speciality = $_POST["speciality"];
    $experience = $_POST["experience"];

    $sql = "INSERT INTO doctors (name, speciality, experience)
            VALUES ('$name', '$speciality', '$experience')";

    mysqli_query($conn, $sql);

    header("Location: doctors.php");
    exit;
}
?>
<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<form class="form-" method="POST">
    <input name="name" placeholder="Name"><br>
    <input name="speciality" placeholder="Speciality"><br>
    <input name="experience" placeholder="Experience"><br>
    <button type="submit">Save</button>
</form>