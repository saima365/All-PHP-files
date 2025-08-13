
 <?php


$number1=null;
$number2=null;


if (isset($_GET["btn_submit"])) {
    $number1=$_GET['number1'];
    $number2=$_GET['number2'];
   
}


if ($number1>$number2) {
   echo "<h1>$number1 is the largest Number among $number1 and $number2</h1>";
}else {
    echo "<h1>$number2 is the largest Number among $number1 and $number2</h1>";
}
?> 









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .red{
            color:red;
        }
    </style>
</head>
<body>
    <form action="" method="GET">
    <h1>Largest</h1>
    <label for="">Give 1st Number</label>
    <input type="text" name="number1"><br><br>
    <label for="">Give 2nd Number</label>
    <input type="text" name="number2"><br><br>
    <button type="submit" name="btn_submit">Submit</button>
    </form>
    
</body>
</html>