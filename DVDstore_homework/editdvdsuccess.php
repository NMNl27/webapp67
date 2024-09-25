<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit DVD Success page</title>
</head>
<body>
    <?php
        require 'conn.php';
        $sql_update="UPDATE dvds SET dvd_id='$_POST[dvd_id]',title='$_POST[title]',genre='$_POST[genre]' ,
        price='$_POST[price]' 
        WHERE dvd_id='$_POST[dvd_id]' ";

        $result= $conn->query($sql_update);

        if(!$result) {
            die("Error God Damn it : ". $conn->error);
        } else {

        echo "Edit Success <br>";
        header("refresh: 1; url=menudvds.php");
        }

    ?>

</body>
</html>