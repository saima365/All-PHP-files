 <?php

$result=1;
$number=null;

if (isset($_GET["btn_submit"])) {
    $number=$_GET['number'];
}

for ($i=1; $i <= $number; $i++) { 
    $result*=$i;
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
    <h1>Factorial</h1>
    <label for="">Give a Number</label>
    <input type="text" name="number">
    <button type="submit" name="btn_submit">Submit</button>
    </form>
     <?php echo "<h1 class='red'> Factorial of $number is $result</h1>" ?>
    
</body>
</html>