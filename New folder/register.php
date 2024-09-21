<?php

 $hostname = 'localhost';
 $username = 'root';
 $password = '';
 $dbname = 'userinfo';

 $conn = new mysqli($hostname,$username,$password,$dbname);

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $city = $_POST['city'];


    $sql = "insert into register(name,password,email,age,city) values ('$name','$password','$email','$age','$city')";

    $result = mysqli_query($conn,$sql);

    if($result){
        echo "successfull registered :";
    }
    else{
        echo "Unsuccessfull registered :";
    }
}
?>