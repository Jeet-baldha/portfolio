<!DOCTYPE html>
<html>
<head>
    <title>Tutorial 8-2</title>
</head>
<body>
	<form method="post">
        
		<label>Enter a number:</label>
		<input type="text" name="number" required>
		<button type="submit">Calculate Sum</button>
	</form>

	<?php
	if(isset($_POST['number'])){
		$number = $_POST['number'];
		$sum = 0;
		$i = 0;

		while($i < strlen($number)){
			$sum += intval($number[$i]);
			$i++;
		}

		echo "The sum of the digits in $number is: $sum";
	}
	?>
</body>
</html>
