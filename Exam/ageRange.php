<?php

if (isset($_GET['submit'])) {
   $ageRange= $_GET['number'];

    if ($ageRange<12) {
        echo "<h1>You are a child</h1>";
    }elseif ($ageRange>12 && $ageRange<18) {
        echo "<h1>You are Teenage</h1>";
    }elseif ($ageRange>=18) {
        echo "<h1>You are an Adult</h1>";
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
    <h1>Check Age</h1>
    <label for="">Give a Number</label>
    <input type="text" name="number">
    <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>