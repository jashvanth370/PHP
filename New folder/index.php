<!DOCTYPE html>
<html>
<head>
  <title>Simple Form</title>
</head>
<body>
  <form method="post" action="register.php">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>

    <label for="age">Age:</label>
    <input type="number" id="age" name="age"><br><br>

    <label for="city">City:</label>
    <input type="text" id="city" name="city"><br><br>

    <input type="submit" value="Submit" name="submit">
  </form>
</body>
</html>