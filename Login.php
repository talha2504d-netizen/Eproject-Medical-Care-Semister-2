<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="width: 350px;">
        <h4 class="text-center mb-4">Login</h4>

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
                <button type="submit" name="login" class="btn btn-primary">Login</button>
            </div>

            <div class="text-center">
                <a href="signup.php">Create an account</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    // Connect to database
    $conn = mysqli_connect('localhost', 'root', '', 'users');

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Query
    $sql = "SELECT * FROM users WHERE user_name='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo "<div class='alert alert-success text-center'>Welcome, " . $row['user_name'] . "</div>";
    } else {
        echo "<div class='alert alert-danger text-center'>Invalid credentials</div>";
    }

    mysqli_close($conn);
}
?>