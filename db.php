<?php

$conn = mysqli_connect("localhost", "root", "", "care");

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}


/* =========================
   CREATE TABLES
========================= */

mysqli_query($conn, "CREATE TABLE IF NOT EXISTS hospitals (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    city VARCHAR(100),
    specialties TEXT,
    rating FLOAT,
    image_url TEXT
)");


mysqli_query($conn, "CREATE TABLE IF NOT EXISTS doctors (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    city VARCHAR(100),
    specialization VARCHAR(100),
    experience INT,
    degree VARCHAR(100),
    image_url TEXT
)");


/* =========================
   INSERT SAMPLE DATA (ONLY IF EMPTY)
========================= */

$checkHosp = mysqli_query($conn, "SELECT * FROM hospitals");

if(mysqli_num_rows($checkHosp) == 0){

mysqli_query($conn, "INSERT INTO hospitals 
(name, city, specialties, rating, image_url) VALUES

('Aga Khan Hospital', 'Karachi', 'Cardiology, Neurology', 4.8,
'https://images.unsplash.com/photo-1586773860418-d37222d8fce3'),

('Shifa International', 'Islamabad', 'Dermatology, Pediatrics', 4.5,
'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d'),

('National Hospital', 'Lahore', 'Orthopedic, ENT', 4.2,
'https://images.unsplash.com/photo-1538108149393-fbbd81895907')");

}


$checkDoc = mysqli_query($conn, "SELECT * FROM doctors");

if(mysqli_num_rows($checkDoc) == 0){

mysqli_query($conn, "INSERT INTO doctors 
(name, city, specialization, experience, degree, image_url) VALUES

('Dr. Ahmed Khan', 'Karachi', 'Cardiologist', 10, 'MBBS',
'https://randomuser.me/api/portraits/men/1.jpg'),

('Dr. Sara Ali', 'Lahore', 'Dermatologist', 7, 'MBBS, FCPS',
'https://randomuser.me/api/portraits/women/2.jpg'),

('Dr. Bilal Noor', 'Islamabad', 'Neurologist', 12, 'MBBS, MD',
'https://randomuser.me/api/portraits/men/3.jpg'),

('Dr. Ayesha Malik', 'Hyderabad', 'Pediatrician', 5, 'MBBS',
'https://randomuser.me/api/portraits/women/4.jpg')");

}

?>