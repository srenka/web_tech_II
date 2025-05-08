<?php
include("./connection.php");

$new_name = "Hari";
$new_password = "0987";

$sql = "UPDATE example
        SET PASSWORD = '$new_password' , Name = '$new_name'
        WHERE id = '1'";

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
