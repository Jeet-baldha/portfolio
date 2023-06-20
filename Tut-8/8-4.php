<!DOCTYPE html>
<html>
<head>
	<title>Tutorial 8-4</title>
</head>
<body>
    
	<?php
	$arr = array(11, 22, 44, 19, 4, 5, 33, 16, 8, 55);
	$n = count($arr);

	for ($i = 0; $i < $n - 1; $i++) {
		for ($j = 0; $j < $n - $i - 1; $j++) {
			if ($arr[$j] > $arr[$j+1]) {
				$temp = $arr[$j];
				$arr[$j] = $arr[$j+1];
				$arr[$j+1] = $temp;
			}
		}
	}

	echo "<p>The sorted array is: </p>";
	echo "<ul>";
	foreach ($arr as $val) {
		echo "<li>$val</li>";
	}
	echo "</ul>";
	?>
</body>
</html>
