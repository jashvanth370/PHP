<?php
        $name=$_POST["name"];
        $age=$_POST["age"];
        $con=mysqli_connect("localhost","root","","university");

        $sql="INSERT INTO StudentDetails(StudentName,StudentAge) values('$name','$age')";
        $result=mysqli_query($con,$sql);
        
        if($result)
        {
            echo "Successfull Sign In <br>";
        }
        else
        {
            echo "Not Successfull<br>";
        }

        echo"username ".$name."<br>Age ".$age."<br>";
    ?>