<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            place-content: center;
            gap: 20px;
        }
    </style>
</head>
<body>
      <div>
         <h1>Product Table</h1>
            <form action="" method="POST">
            <label for="n">Id:</label> <br>
            <input type="text" name="id" id="id"> <br> <br>
            <label for="n">Name:</label> <br>
            <input type="text" name="name" id="name"> <br> <br>
            <label for="n">Price:</label> <br>
            <input type="text" name="address" id="address"> <br> <br>
            <label for="n">Offer Price:</label> <br>
            <input type="text" name="address" id="address"> <br> <br>
            <input type="submit" name="btn_Name" >
            </form>
       </div>

       <div>
         <h1> Updated Product Table</h1>
            <form action="" method="POST">
            <label for="n">Id</label> <br>
            <input type="text" name="id" id="id"> <br> <br>
            <label for="n">Name</label> <br>
            <input type="text" name="name" id="name" > <br> <br>
            <label for="n">Price</label> <br>
            <input type="text" name="address" id="address"> <br> <br>
            <label for="n">Offer Price</label> <br>
            <input type="text" name="address" id="address"> <br> <br>
            <input type="submit" name="btn_update"  value="Update" >
            </form>
       </div>
</body>
</html>