<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert DVD</title>
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
        <h1>Insert DVD</h1>
        <form method="post" action="insertsuccess.php">

        <p>
            <label for="dvd_id">ID</label>
            <input type="text" id="dvd_id" name="dvd_id">
        </p>

        <p>
            <label for="title">Title</label>
            <input type="text" id="title" name="title">
        </p>

        <p>
            <label for="genre">Genre</label>
            <input type="text" id="genre" name="genre">
        </p>

        <p>
            <label for="price">Price</label>
            <input type="text" id="price" name="price">
        </p>

            <input type="submit" value="บันทึก">
        <a href='mainmenu.php'>
        </form>
    </div>
</body>
</html>
