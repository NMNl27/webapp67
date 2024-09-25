<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Member</title>
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
        if(!isset($_GET['member_id'])){
            header("refresh: 0; url=mainmenu.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM members WHERE member_id='$_GET[member_id]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>

<h1><center>Edit Member</center></h1><br>
<div class="container">
        <form method="post" action="editsuccess.php">

        <p>
        <label>ID</label>
        <input type="text" name="member_id" id="member_id" value="<?=$row['member_id'];?>" />
        </p>

        <p>
        <label>First Name</label>
        <input type="text" name="first_name" id="first_name" value="<?=$row['first_name'];?>" />
        </p>

        <p>
        <label>Last Name</label>
        <input type="text" name="last_name" id="last_name" value="<?=$row['last_name'];?>" />
        </p>

        <p>
        <label>Email</label>
        <input type="text" name="email" id="email" value="<?=$row['email'];?>" />
        </p>

        <p>
        <label>Phone</label>
        <input type="text" name="phone_number" id="phone_number" value="<?=$row['phone_number'];?>" />
        </p>

        <input type="submit" value="บันทึก">
        <a href='mainmenu.php'><button> Home</button></a>
        </form>
</div>
</body>
</html>