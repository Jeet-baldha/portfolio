<!DOCTYPE html>
<html>
<head>
	<title>Tutorial 8-1</title>
</head>
<body>
	<form method="post">
        <label>Enter the number of terms:</label>
		<input type="text" name="terms" required>
		<button type="submit">Generate Series</button>
	</form>

	<?php
	if(isset($_POST['terms'])){
		$terms = $_POST['terms'];
		$num1 = 0;
		$num2 = 1;
		echo "$num1, $num2";

		$i = 2;
		do{
			$num3 = $num1 + $num2;
			echo ", $num3";
			$num1 = $num2;
			$num2 = $num3;
			$i++;
		}while($i < $terms);
	}
	?>
</body>
</html>
