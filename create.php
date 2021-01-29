<?php

include("./connect_db.php");
var_dump($_POST);

$firstname = $_POST["firstname"];
$infix = $_POST["infix"];
$lastname = $_POST["lastname"];

$sql = "INSERT INTO `users` (`id`, `firstname`, `infix`, `lastname`) VALUES (NULL, '$firstname', '$infix', '$lastname');";


$result = mysqli_query($conn,$sql);

if ($result) {
    echo "Het opslaan is gelukt!";
} else {
    echo "Het opslaan is niet gelukt :(";
}

header("LOCATION: ./read.php");
header("Refresh: 4; url=./index.php")
//39:20 van les week 50
?>
