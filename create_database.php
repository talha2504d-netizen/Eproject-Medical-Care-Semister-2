<?php

// Database Connection
$conn = mysqli_connect("localhost", "root", "");

// Check Connection
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

// Create Database
$sql = "CREATE DATABASE IF NOT EXISTS care";

if (mysqli_query($conn, $sql)) {
    echo "Database Created Successfully <br>";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

// Select Database
mysqli_select_db($conn, "care");


/* =========================
   ADMIN TABLE
========================= */

// Create Admin Table
$admin = "CREATE TABLE IF NOT EXISTS admin (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(100),
    Email VARCHAR(100),
    Password VARCHAR(100)
)";

if (mysqli_query($conn, $admin)) {
    echo "Admin Table Created Successfully <br>";
} else {
    echo "Error creating admin table: " . mysqli_error($conn);
}

// // Insert Admin Data
// $insertAdmin = "INSERT INTO admin (Name, Email, Password) VALUES
// ('Hasnain', 'hasnain@gmail.com', '12345'),
// ('Ali', 'ali@gmail.com', 'ali123'),
// ('Ahmed', 'ahmed@gmail.com', 'pass789'),
// ('Sara', 'sara@gmail.com', 'sara456')
// ";

if (mysqli_query($conn, $insertAdmin)) {
    echo "Admin Data Inserted Successfully <br>";
} else {
    echo "Admin Data Already Exists or Error <br>";
}


/* =========================
   PATIENTS TABLE
========================= */

// Create Patients Table
$patients = "CREATE TABLE IF NOT EXISTS patients (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    dob DATE,
    address VARCHAR(255),
    phone VARCHAR(20),
    date_account_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $patients)) {
    echo "Patients Table Created Successfully <br>";
} else {
    echo "Error creating patients table: " . mysqli_error($conn);
}

// // Insert Patients Data
// $patientData = "INSERT INTO patients (name, dob, address, phone) VALUES
// ('Ali Khan', '2001-05-14', 'Karachi, Pakistan', '03001234567'),
// ('Sara Ahmed', '1998-11-20', 'Lahore, Pakistan', '03111222333'),
// ('Hasnain Malik', '2003-07-09', 'Islamabad, Pakistan', '03219876543'),
// ('Ayesha Noor', '2000-02-18', 'Hyderabad, Pakistan', '03335557788')
// ";

if (mysqli_query($conn, $patientData)) {
    echo "Patients Data Inserted Successfully <br>";
} else {
    echo "Patients Data Already Exists or Error <br>";
}


/* =========================
   DOCTORS TABLE
========================= */

// Create Doctors Table
$doctors = "CREATE TABLE IF NOT EXISTS doctors (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    city VARCHAR(100),
    specialization VARCHAR(100),
    experience INT,
    degree VARCHAR(100)
)";

if (mysqli_query($conn, $doctors)) {
    echo "Doctors Table Created Successfully <br>";
} else {
    echo "Error creating doctors table: " . mysqli_error($conn);
}

// Insert Doctors Data
// $doctorData = "INSERT INTO doctors 
// (name, city, specialization, experience, degree) VALUES

// ('Dr. Ahmed Khan', 'Karachi', 'Cardiologist', 10, 'MBBS'),
// ('Dr. Sara Ali', 'Lahore', 'Dermatologist', 7, 'MBBS, FCPS'),
// ('Dr. Bilal Noor', 'Islamabad', 'Neurologist', 12, 'MBBS, MD'),
// ('Dr. Ayesha Malik', 'Hyderabad', 'Pediatrician', 5, 'MBBS')
// ";

if (mysqli_query($conn, $doctorData)) {
    echo "Doctors Data Inserted Successfully <br>";
} else {
    echo "Doctors Data Already Exists or Error <br>";
}


/* =========================
   BOOKINGS APPOINTMENTS TABLE
========================= */

// Create Bookings Table
$bookings = "CREATE TABLE IF NOT EXISTS bookings_appointments (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    patient_id INT,
    doctor_id INT,
    time_slot VARCHAR(50),
    appointment_date DATE
)";

if (mysqli_query($conn, $bookings)) {
    echo "Bookings Table Created Successfully <br>";
} else {
    echo "Error creating bookings table: " . mysqli_error($conn);
}

// // Insert Booking Data
// $bookingData = "INSERT INTO bookings_appointments
// (patient_id, doctor_id, time_slot, appointment_date) VALUES

// (1, 1, '10:00 AM - 10:30 AM', '2026-05-20'),
// (2, 3, '11:00 AM - 11:30 AM', '2026-05-21'),
// (3, 2, '02:00 PM - 02:30 PM', '2026-05-22'),
// (4, 4, '04:00 PM - 04:30 PM', '2026-05-23')
// ";

if (mysqli_query($conn, $bookingData)) {
    echo "Bookings Data Inserted Successfully <br>";
} else {
    echo "Bookings Data Already Exists or Error <br>";
}


// Close Connection
mysqli_close($conn);

?>