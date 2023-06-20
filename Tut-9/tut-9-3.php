<?php

function swap($a, $b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "After swap: x = $a, y = $b\n <br>";
}

$x = 5;
$y = 10;
echo "Before swap: x = $x, y = $y\n <br>";
swap($x, $y);


?>