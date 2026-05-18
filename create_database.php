<?php

/* =========================
   MYSQL CONNECTION
========================= */

$conn = mysqli_connect("localhost", "root", "");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}


/* =========================
   CREATE DATABASE
========================= */

$sql = "CREATE DATABASE IF NOT EXISTS care";

if(mysqli_query($conn, $sql)){
} else {
    die("Database Error: " . mysqli_error($conn));
}


/* =========================
   SELECT DATABASE
========================= */

mysqli_select_db($conn, "care");


/* =========================
   ADMIN TABLE
========================= */

$adminTable = "CREATE TABLE IF NOT EXISTS admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(100)
)";

mysqli_query($conn, $adminTable);


/* =========================
   PATIENTS TABLE
========================= */

$patientsTable = "CREATE TABLE IF NOT EXISTS patients (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    dob DATE,
    address VARCHAR(255),
    phone VARCHAR(20),
    date_account_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

mysqli_query($conn, $patientsTable);


/* =========================
   DOCTORS TABLE
========================= */

$doctorsTable = "CREATE TABLE IF NOT EXISTS doctors (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    city VARCHAR(100),
    specialization VARCHAR(100),
    experience INT,
    degree VARCHAR(100)
)";

mysqli_query($conn, $doctorsTable);


/* =========================
   HOSPITALS TABLE
========================= */

$hospitalTable = "CREATE TABLE IF NOT EXISTS hospitals (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    city VARCHAR(100),
    specialties TEXT,
    rating FLOAT,
    image_url TEXT
)";

mysqli_query($conn, $hospitalTable);


/* =========================
   BOOKINGS TABLE
========================= */

$bookingTable = "CREATE TABLE IF NOT EXISTS bookings_appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    patient_id INT,
    doctor_id INT,
    time_slot VARCHAR(50),
    appointment_date DATE
)";

mysqli_query($conn, $bookingTable);

// echo "<h2>All Tables Ready Successfully ✅</h2>";

?>