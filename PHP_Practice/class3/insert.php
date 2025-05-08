<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <form action="" method="post">
        Name: <input type="text" name="name">
        <br>
        Password: <input type="password" name="password">
        <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>
<?php
include("./connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $password = $_POST["password"];
    if (empty($name)) {
        echo "Please enter the username:";
    } else if (empty($password)) {
        echo "Please enter a password";
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO example( Name, Password) values ('$name','$hash')";
        if (mysqli_query($con, $sql)) {
            echo "Registered";
        } else {
            echo "Error";
        }
    }
}
?>