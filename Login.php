<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Log in to an existing Account</h2>
    <form action="login.php" METHOD="post">
        Username : <input type="text" name="username" id="username">
        <br>
        Password: <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Login" name="login">
        <a href="signup.php">Or Sign Up for the first time.</a>
    </form>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["login"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
        }


        // coonect to database
        $conn = mysqli_connect('localhost', 'root', '', 'care');

        // make get query
        $sql = "SELECT * FROM users WHERE user_name = '$username' and password = '$password';";

        // run the query
        $conn = mysqli_query($conn, $sql);

        // get result as a n array
        $result = mysqli_fetch_assoc($conn);
        echo $result["username"];
        echo $result["password"];
        // if (mysqli_num_rows($result) > 0) {


        // if (mysqli_connect_errno()) {
        //     echo ''. mysqli_connect_error();
        //     exit();

    }
?>