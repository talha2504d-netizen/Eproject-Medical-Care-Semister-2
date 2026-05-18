<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="width: 350px;">
        <h4 class="text-center mb-4">Create Account</h4>

        <form action="" method="post">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="d-grid mb-3">
                <button type="submit" name="submit" class="btn btn-success">Sign Up</button>
            </div>

            <div class="text-center">
                <a href="login.php">Already have an account? Login.</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    // Connect to database
    $conn = mysqli_connect('localhost', 'root', '', 'care');

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert query
    $sql = "INSERT INTO patients(username, password) VALUES ('$username', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "<div class='alert alert-success text-center'>Account created successfully</div>";
    } else {
        echo "<div class='alert alert-danger text-center'>Error: " . mysqli_error($conn) . "</div>";
    }

    mysqli_close($conn);
}
?>