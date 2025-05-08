<?php
function add($a, $b)
{
    $c = $a + $b;
    echo $c;
    function e()
    {
        echo "Function inside function";
    }
    e();
}

add(5, 10);

$name = "BCA students";
function sayHello(){
    GLOBAL $name;
    echo "Hello" . $name;
}
sayHello();
?>

