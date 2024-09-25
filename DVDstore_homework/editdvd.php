<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit DVD</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        h1 {
            text-align: center;
            color: #3498db;
        }
        label {
            font-size: 16px;
            margin-bottom: 5px;
            color: #333;
        }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 15px;
            box-sizing: border-box;
            font-size: 14px;
        }
        input:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
        }
        button {
            width: 100%;
            background-color: #3498db;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
<?php
        if(!isset($_GET['dvd_id'])){
            header("refresh: 0; url=mainmenu.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM dvds WHERE dvd_id='$_GET[dvd_id]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>

<h1><center>Edit DVD</center></h1><br>
<div class="container">
        <form method="post" action="editdvdsuccess.php">

        <p>
        <label>ID</label>
        <input type="text" name="dvd_id" id="dvd_id" value="<?=$row['dvd_id'];?>" />
        </p>

        <p>
        <label>Title</label>
        <input type="text" name="title" id="title" value="<?=$row['title'];?>" />
        </p>

        <p>
        <label>Genre</label>
        <input type="text" name="genre" id="genre" value="<?=$row['genre'];?>" />
        </p>

        <p>
        <label>Price</label>
        <input type="text" name="price" id="price" value="<?=$row['price'];?>" />
        </p>

        <input type="submit" value="บันทึก">
        <a href='mainmenu.php'><button> Home</button></a>
        </form>
</div>
</body>
</html>