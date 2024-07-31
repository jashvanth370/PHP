<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="RadioButton.php" method="post">
        <input type="radio" value="visa" name="creditCart">
        Visa <br>
        <input type="radio" value="MasterCard" name="creditCart">
        MasterCard <br>
        <input type="radio" value="AmericanCard" name="creditCart">
        AmericanCard <br>

        <input type="submit" value="Confirm" name="confirm">
    </form>
</body>
</html>

<?php

if(isset($_POST["confirm"]))
{
    $creditCard =null;

    if(isset($_POST["creditCart"]))
    {
        $creditCard = $_POST["creditCart"];
    }

    switch($creditCard){
            case "visa":
                echo"you selelcted visa";
                break;
                case "MasterCard":
                    echo"you selelcted MasterCard";
                    break;
                    case "AmericanCard":
                        echo"you selelcted AmericanCard";
                        break;
                    default:
                        echo "please make selection";
                        break;
    }
}


?>