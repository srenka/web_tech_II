
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <h1>My php page</h1>
<?php
    echo "Hello";
    EcHo "World <br>";
    ECHO "World <br>";
    $web = 5;
    $a = "Lagandree";
    $b = 5.5;
    $c = "gefs";
    //$c = null;
    var_dump($c);

    $isActive = false;
    if ($isActive){
        echo "active\n";
    }
    //array declaration
    //1. Index arrays
    $car = array("Volvo","BWW","Toyota");
    $car1[0] = "A";
    $car1[1] = "b";
    $car1[2] = "c";
    echo $car[0];
    //2. Associative arrays
    $age = ["Peter" => "35","Ben" => "20"] //key=>value 
    
    //3. Multidimensional arrays
    
    //resource datype
    //$handle = fopen("file.txt","r");
?>   
</body>
</html>