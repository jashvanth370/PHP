<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="MathFun.php" method="post">
        <label> X: </label>
        <input type="text" name="x"> <br>
        <label> Y: </label>
        <input type="text" name="y"> <br>
        <label> Z: </label>
        <input type="text" name="z"> <br>
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php 

$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];

$total =$x+$y;
echo $total;
?>