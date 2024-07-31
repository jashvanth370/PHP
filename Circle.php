<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Circle.php" method="post">
        <label> radius :</label>
        <input type="text" name="radius"> <br>
        <input type="submit" value="calculate">
    </form>
</body>
</html>

<?php

$r = $_POST["radius"];
$area=null;
$area =$r*$r*pi();
$area1=round($area,2);
echo "Area = {$area1}cm <br>";

$circumference =2*$r*pi();
$circumference1=round($circumference,2);
echo "circumference = {$circumference1}cm <br>";

?>