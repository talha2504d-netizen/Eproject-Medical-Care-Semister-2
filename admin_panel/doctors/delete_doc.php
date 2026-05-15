<?php
include "../../db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["doc_id"];

    mysqli_query($conn, "DELETE FROM doctors WHERE id = '$id';");

    // header("Location: ../doctors.php");
    // exit;
}