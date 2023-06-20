<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tut-7-5.php" method = "post">
        <label for="input">Enter Value 1 : </label>
        <input type="text" name = "num1"><br><br>
        <label for="input">Enter Value 2 : </label>
        <input type="text" name = "num2"><br><br>
        <label for="input">Enter choice : </label>
        <input type="text" name = "choice"><br><br>
        <input type="submit" value="submit" name = "submit">
    </form>

<?php
    if (isset($_POST['submit'])){
        $val1= $_POST['num1'];
        $val2= $_POST['num2'];
        $ch= $_POST['choice'];

        switch ($ch) {
            case '+':
                echo "your operation value is ".$val1 + $val2; break;
            case '-':
                echo "your operation value is ".$val1 - $val2; break;
            case '*':
                echo "your operation value is ".$val1 * $val2; break;
            case '/':
                echo "your operation value is ".$val1 / $val2; break;
            
            
            default:
                echo "Invalid";
        }
    }
?>
</body>
</html>