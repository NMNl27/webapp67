<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Member</title>
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
    <div class="container">
        <h1>Add New Member</h1>
        <form method="post" action="addsuccess.php">

        <p>
            <label for="member_id">ID</label>
            <input type="text" id="member_id" name="member_id">
        </p>

        <p>
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name">
        </p>

        <p>
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name">
        </p>

        <p>
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
        </p>

        <p>
            <label for="phone_number">Phone Number</label>
            <input type="text" id="phone_number" name="phone_number">
        </p>

            <input type="submit" value="บันทึก">
        <a href='mainmenu.php'>
        </form>
    </div>
</body>
</html>
