<?php
//$file = fopen("abc.txt", 'a');
//fwrite($file, "ftghj");

$file = fopen("abc.txt", 'r');
while (!feof($file)) {
    $content = fgets($file);
    echo $content;
    //echo fgetc($file);
}
if (feof($file)) echo "End of file";
