<?php

include("./connection.php");
$name = "Ram Baral";
$password = "12345";

$sql = "INSERT INTO example(Name,Password) values ('$name','$password')";

try {
    if (mysqli_query($con, $sql)) {
        echo "Registered";
    } else {
        echo "Error";
    }
} catch (mysqli_sql_exception $e) {
    echo "Exception " . $e->getMessage();
}
mysqli_close($con);
