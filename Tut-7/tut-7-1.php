<?php

    $sub1 = 90;
    $sub2 = 85;
    $sub3 = 90;
    $sub4 = 90;
    $sub5 = 90;

    $total = $sub1 +$sub2 +$sub3 +$sub4 + $sub5;


    $percentage = $total/5;

    echo "Maths Marks: $sub1 <br>";
    echo "History Marks: $sub2 <br>";
    echo "Science Marks: $sub3 <br>";
    echo "Hindi Marks: $sub4 <br>";
    echo "English Marks: $sub5 <br>";
    echo "<br>Total Marks: $total <br>"; 
    echo "<br>percentage: $percentage % <br>"; 

   if($percentage <= 100 && $percentage >= 70){
        echo "Your grade is A";
   }
   else if($percentage <= 70 && $percentage >= 50){
        echo "your grade is B";
   }
   else{
        echo "your grade is C";
   }

?>