<?php

$result=null;
if (isset($_GET['btn_submit'])) {
    $mark=$_GET['number'];


    if ($mark>=80 && $mark<=100) {
        $result="A+";
    } else if($mark>=70 && $mark<80) {
        $result="A";
    }else if($mark>=60 && $mark<70) {
        $result="A-";
     }else if($mark>=50 && $mark<60) {
        $result="B";
     }else {
        $result="Fail";
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
<style>
    .red{
        color:red;
    }
    .green{
        color:green;
    }

</style>


<body>



    <form action="result.php" method="Get">

    <label for="">Give the obtained Mark</label><br>
    <input type="text" name="number"><br><br>
    <button type="submit" name="btn_submit">Submit</button>


    </form>

    <!-- <h1>Result is <?php echo $result?>
    </h1> -->
   

</body>
</html>