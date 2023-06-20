<!DOCTYPE html>
<html>
<head>
    <title>Tutorial 8-3</title>
</head>
<body>
	<form method="post">
        
		<label>Enter the number of prime numbers:</label>
		<input type="text" name="count" required>
		<button type="submit">Generate Numbers</button>
	</form>

	<?php
	if(isset($_POST['count'])){
		$count = $_POST['count'];
		$i = 2;
		$primeCount = 0;

		for($i; $primeCount < $count; $i++){
			$isPrime = true;

			for($j = 2; $j <= sqrt($i); $j++){
				if($i % $j == 0){
					$isPrime = false;
					break;
				}
			}
			if($isPrime){
				echo "$i, ";
				$primeCount++;
			}
		}
	}
	?>
</body>
</html>
