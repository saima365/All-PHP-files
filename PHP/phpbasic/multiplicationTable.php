<?php

if (isset($_GET['submit'])) {
    $multiT=$_GET['number'];


$html="<ul>";

for($i=1; $i <=10; $i++) { 
    $result= $multiT * $i;
    $html.="<li>{$multiT} X {$i} = {$result}</li>";
}


$html.="</ul>";
echo $html;
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
     <form action="" method="GET">
    <h1>Multiplication Table</h1>
    <label for="">Give a Number</label>
    <input type="text" name="number">
    <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>