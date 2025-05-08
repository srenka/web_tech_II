<?php
include("./connection.php");

$id_deletion = "4";

$sql = "DELETE FROM example
        WHERE id = '$id_deletion'";

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
