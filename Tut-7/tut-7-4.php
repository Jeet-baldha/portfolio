<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tut-7-4.php" method = "post">
        <label for="input">Enter Unit : </label>
        <input type="text" name = "unit">
        <input type="submit" value="submit" name = "submit">
    </form>

<?php
    if (isset($_POST['submit'])){
        $units= $_POST['unit'];

        $bill = 0;

switch (true) {
  case ($units <= 50):
    $bill = $units * 3.50;
    break;
  case ($units <= 150):
    $bill = 50 * 3.50 + ($units - 50) * 4.00;
    break;
  case ($units <= 250):
    $bill = 50 * 3.50 + 100 * 4.00 + ($units - 150) * 5.20;
    break;
  default:
    $bill = 50 * 3.50 + 100 * 4.00 + 100 * 5.20 + ($units - 250) * 6.50;
    break;
    }

    echo "your total bill is ".$bill;
    }
?>
</body>
</html>