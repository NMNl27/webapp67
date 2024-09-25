<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Success page</title>
</head>
<body>
    <?php
        require 'conn.php';
        $sql_update="UPDATE members SET member_id='$_POST[member_id]',first_name='$_POST[first_name]',last_name='$_POST[last_name]' ,
        email='$_POST[email]' ,
        phone_number='$_POST[phone_number]' 
        WHERE member_id='$_POST[member_id]' ";

        $result= $conn->query($sql_update);

        if(!$result) {
            die("Error God Damn it : ". $conn->error);
        } else {

        echo "Edit Success <br>";
        header("refresh: 1; url=mainmenu.php");
        }

    ?>

</body>
</html>