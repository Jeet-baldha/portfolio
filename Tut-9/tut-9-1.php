<?php

function factorial($n) {
    if (!is_int($n) || $n < 0) {
        throw new InvalidArgumentException('Factorial is only defined for non-negative integers.');
    }

    $result = 1;
    for ($i = 2; $i <= $n; $i++) {
        $result *= $i;
    }

    return $result;
}


echo "Factorial is: ".factorial(5);

?>