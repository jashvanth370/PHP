<?php
function bday($name)
{
    echo"Happy Birthday To you! <br>";
    echo"Happy Birthday Dear {$name}!<br>";
    echo"Happy Birthday To you!<br>";
    echo"Happy Birthday Dear  {$name}!<br><br>";
}
bday("jashva");

function is_even($num)
{
    $result = $num % 2;
    return $result;
}

echo is_even(15);
echo "<br>";
echo "<br>";


function hypo($num1 , $num2)
{
    $result = sqrt($num1 **2 + $num2**2);
    return $result;
}

echo hypo(12,17);

echo "<br>";
echo "<br>";

?>