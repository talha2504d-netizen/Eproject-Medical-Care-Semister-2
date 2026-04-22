<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h1>Login page</h1>

    <form action="Login.php" method="POST">
        User Name: <input type="text" name="username"> <br>
        Password:  <input type="password" name="password"> <br>
        <input type="submit" value="Login" name="login">
        <input type="submit" value="Signup" name="signup">
    </form>


</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // get details from the form
        $username = $_POST["username"];
        $password = $_POST["password"];

        //connect to database
        $conn = mysqli_connect("localhost", "root", "", "care_project");

        $sql = "SELECT * FROM users WHERE user_name = '$username' and password = '$password';";

        $result = mysqli_query($conn, $sql);

        $result = mysqli_fetch_assoc($result);

        if ($result) {

            echo "data exist`"; 
        } else {
            // echo $result;
            echo "no data";
        }
    }

?>