<!DOCTYPE html>
<html>
    <body>
        <form action = "" method = "post" enctype="multipart/form-data">
            <input type = "file" name = "myfile">
            <input type = "submit" name ="submit">
        </form>
    </body>
</html>
<?php

$filesname= $_FILES['myfile']['name'];

$tempname = $_FILES['myfile']['tmp_name'];

$target_dir = "testing/";


move_uploaded_file($tempname, $target_dir.$filesname);
?>