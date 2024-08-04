<?php

$username="Jash vanth";
$phone="123-456-7890";

$username = strtolower($username);
echo "{$username} <br>";
//jash vanth


$username = strtoupper(@$username);
echo "{$username} <br>";
//JASH VANTH

$username = trim($username);
echo "{$username} <br>";
//Jash vanth


$username = str_pad($username,24,"0");
echo "{$username} <br>";
//Jash vanth00000000000000


$username = strrev($username);
echo "{$username} <br>";
//htnav hsaJ

$phone= str_replace("-","", $phone);
echo "{$username} <br>";
//Jash vanth
?>