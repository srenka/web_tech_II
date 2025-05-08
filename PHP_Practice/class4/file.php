<?php
$file = fopen("abc.txt", 'r');
//$content = fread($file, 6);

//echo $content;
echo fgets($file);
echo fgets($file);
echo fgetc($file);
// fclose($file);
