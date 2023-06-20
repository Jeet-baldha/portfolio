<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="tut-7-3.php" method="post">
        
        <label for="input">Car Name : </label>
        <input type="text" name = "car"><br><br>
        <label for="input">Enter model : </label>
        <input type="text" name = "model"><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
    
    <?php

    if(isset($_POST['submit'])){

        
        $company = $_POST['car'];
        $model = $_POST['model'];
        
        switch ($company) {
            case "Maruti":
                switch ($model) {
            case "Ertiga":
                $price = 7.50;
                break;
                case "Swift":
                    $price = 5.50;
                    break;
                    default:
                    $price = 0;
                }
                break;
                case "Hyundai":
                    switch ($model) {
                        case "i20":
                            $price = 8.50;
                            break;
                            case "Creta":
                                $price = 12.50;
                                break;
                                default:
                                $price = 0;
                            }
                            break;
                            case "Kia" :
                                switch ($model) {
                                    case "Seltos":
                                        $price = 11.50;
                                        break;
                                        case "Carens":
                                            $price = 9.50;
                                            break;
                                            default:
                                            $price = 0;
                                        }
                                        break;
                                        default:
                                        $price = 0;
                                    }
                                    
                                    if ($price > 0) {
                                        echo "$company $model costs  $price lakhs";
                                    } else {
                                        echo "Invalid company or model";
                                    }
                                    
                                }
                                    ?>

</body>
</html>