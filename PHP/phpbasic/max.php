
 <?php


$number1=null;
$number2=null;
$number3=null;
$largest=null;

if (isset($_GET["btn_submit"])) {
    $number1=$_GET['number1'];
    $number2=$_GET['number2'];
    $number3=$_GET['number3'];
}


if ($number1>$number2 && $number1>$number3 ) {
    $largest=$number1;
}elseif ($number2>$number3 && $number2>$number1) {
    $largest=$number2;
}else {
     $largest=$number3;
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
    <label for="">Give 3rd Number</label>
    <input type="text" name="number3"><br><br>
    <button type="submit" name="btn_submit">Submit</button>
    </form>
     <?php if ($largest) {
        echo "<h1 class=red> largest number is $largest among $number1 ,$number2 ,$number3</h1>";
     }  
             ?>
</body>
</html>