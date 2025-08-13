<?php

$name = "Afrin Tithe";
// print_r($_GET);
if (isset($_GET ['btn_name'])) {
    $name = $_GET['name'];
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
    <h1>This is PHP file</h1>
    <form action="form.php" method="GET">
        <label for="input_field">Give Your Name</label><br>
        <input type="text" name="name" id="input_field"><br><br>

        <input type="submit" name="btn_name">

    </form>

    <h2> Welcome <?php echo $name ;?> </h2>
</body>
</html>