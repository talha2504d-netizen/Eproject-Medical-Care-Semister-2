<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Create a new Account</h2>
    <form action="signup.php" METHOD="post">
        Username : <input type="text" name="username" id="username">
        <br>
        Password: <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Submit" name="submit">
        <a href="login.php">Or Login instead.</a>
    </form>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["submit"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
        }


        // coonect to database
        $conn = mysqli_connect('localhost', 'root', '', 'care');

        $sql = "INSERT INTO patients(username, password) VALUE ('$username', '$password');";

        $conn = mysqli_query($conn, $sql);

        $sql = "SELECT * FROM patients;";
        // $result = mysqli_fetch_assoc($conn);
        // echo $result;
        // if (mysqli_num_rows($result) > 0) {


        // if (mysqli_connect_errno()) {
        //     echo ''. mysqli_connect_error();
        //     exit();

    }
?>