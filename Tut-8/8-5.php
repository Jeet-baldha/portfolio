<!DOCTYPE html>
<html>
<head>
	<title>Tutorial 8-5</title>
	<style type="text/css">
		.black {
			background-color: #000000;
		}
		.white {
			background-color: #ffffff;
		}
		.square {
			width: 50px;
			height: 50px;
			display: inline-block;
		}
	</style>
</head>
<body>
    
	<?php
	$rows = 8;
	$cols = 8;

	echo "<div>";
	for ($i = 1; $i <= $rows; $i++) {
		for ($j = 1; $j <= $cols; $j++) {
			if (($i + $j) % 2 == 0) {
				$color = "white";
			} else {
				$color = "black";
			}
			echo "<div class='square $color'></div>";
		}
		echo "<br>";
	}
	echo "</div>";
	?>
</body>
</html>
