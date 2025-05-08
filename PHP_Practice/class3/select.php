<?php
include("./connection.php");

//$sql = "SELECT id,password FROM example where id > 2";
//$sql = "SELECT id,password FROM example ORDERBY id DESC";
$sql = "SELECT id,name FROM example where name like '%hari%'";

$res = mysqli_query($con,$sql);


    if (mysqli_num_rows($res) > 0) {
        while($row = mysqli_fetch_assoc($res)){
            echo "id: " .$row["id"] ."Name: " .$row["name"] . "<br>";
        }
    } 
    else{
        echo "0 results";
    }
mysqli_close($con);
