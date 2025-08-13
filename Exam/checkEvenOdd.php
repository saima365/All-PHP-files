<?php


if (isset($_GET['submit'])) {
    $evenOdd=$_GET['number'];


if ($evenOdd%2==0) {
    echo "<h1>$evenOdd is a Even Number</h1>";
} else {
    echo "<h1>$evenOdd is a Odd Number</h1>";
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
    <h1>Check is the number Even or Odd</h1>
    <label for="">Give a Number</label>
    <input type="text" name="number">
    <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>