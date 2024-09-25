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
 
    $sql_update = "INSERT INTO members(member_id, first_name, last_name, email, phone_number) 
                   VALUES ('{$_POST['member_id']}', 
                            '{$_POST['first_name']}',
                            '{$_POST['last_name']}',
                            '{$_POST['email']}',
                            '{$_POST['phone_number']}')";

    $result = $conn->query($sql_update);

    if (!$result) {
        die("Error God Damn it: " . $conn->error);
    } else {
        echo "Insert Success <br>";
        header("refresh: 1; url=mainmenu.php");
    }
?>

</body>
</html>