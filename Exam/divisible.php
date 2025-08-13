<?php

if (isset($_GET['submit'])) {
   $posOrNeg=$_GET['number'];


if ($posOrNeg%3==0 && $posOrNeg%5==0) {
    echo "<h2>$posOrNeg is  divisible by 3 and 5</h2>";
}else {
     echo "<h2>$posOrNeg is not divisible by 3 and 5</h2>";
}








}





?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
    <h1>Check if the Number is Positive or Negative</h1>
    <label for="">Give a Number</label>
    <input type="text" name="number">
    <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>