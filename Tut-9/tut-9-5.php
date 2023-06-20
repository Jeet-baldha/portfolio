<?php


function vowelCount($str) {
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], ['a', 'e', 'i', 'o', 'u'])) {
            $count++;
        }
    }
    return $count;
}


echo vowelCount("hello")."<br>";
echo vowelCount("programming")."<br>";
echo vowelCount("algorithm")."<br>"; 



?>