<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert success page</title>
</head>
<body>
<?php
    require 'conn.php';
 
    $sql_update = "INSERT INTO dvds(dvd_id, title, genre, price) 
                   VALUES ('{$_POST['dvd_id']}', 
                            '{$_POST['title']}',
                            '{$_POST['genre']}',
                            '{$_POST['price']}')";

    $result = $conn->query($sql_update);

    if (!$result) {
        die("Error God Damn it: " . $conn->error);
    } else {
        echo "Insert Success <br>";
        header("refresh: 1; url=menudvds.php");
    }
?>
</body>
</html>