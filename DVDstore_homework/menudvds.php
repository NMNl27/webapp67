<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DVDs List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
        a {
            text-decoration: none;
            color: #3498db;
        }
        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #2980b9;
        }
        .table-container {
            width: 80%;
            margin: 0 auto;
        }
        .insert-button {
            width: 80%;
            margin: 20px auto;
            text-align: left;
            margin-right: 20px; /* ขยับมาทางซ้าย 20px */
        }
    </style>
</head>
<body>

<?php
    require 'conn.php';
    $sql = "SELECT * FROM dvds";
    $result = $conn->query($sql);
    if (!$result){
        die("Error : ". $conn->$conn_error);
    }
?>

<h1><center>DVDs</center></h1><br>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Price</th>
                <th> </th>
            </tr>
        </thead>
        <tbody>
        <?php 
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo"<tr><td>".$row["dvd_id"]."</td>"."<td>"
                        .$row["title"]."</td>"."<td>"
                        .$row["genre"]."</td>"."<td>"
                        .$row["price"]." "."<td>"."<a href='editdvd.php?dvd_id="
                        .$row["dvd_id"]."'><button> Edit </button></a>"."</td>";
                        echo "</tr>";    
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
            ?>
        </tbody>
    </table>
</div>

<div class="insert-button">
    <a href='insertdvd.php'><button> Insert </button></a>
</div>

<div class="insert-button">
    <a href='mainmenu.php'><button> Members </button></a>
</div>

</body>
</html>
