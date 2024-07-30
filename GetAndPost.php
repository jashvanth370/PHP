




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="GetAndPost.php" method="get">
        <Label>
            name:  <br><input type="text" name="username">
        </Label>
<br>
        <Label>
            age:  <br><input type="text" name="age">
        </Label>
<br>
        <Label>
            password:  <br><input type="password" name="pwd">
        </Label>

        <br>
        <input type="submit" value="login">
    </form>
</body>
</html>

<?php

//Some notes on GET requests:

//GET requests can be cached
//GET requests remain in the browser history
//GET requests can be bookmarked
//GET requests should never be used when dealing with sensitive data
//GET requests have length restrictions
//GET requests are only used to request data (not modify) 

//Some notes on POST requests:

//POST requests are never cached
//POST requests do not remain in the browser history
//POST requests cannot be bookmarked
//POST requests have no restrictions on data length

echo "{$_GET["username"]}<br>";
echo "{$_GET["age"]} <br>";
echo"{$_GET["pwd"]} <br>";



?>