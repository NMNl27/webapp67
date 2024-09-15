<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercise02</title>
</head>
<body>
    <?php
    function checkTemperature($temp1, $temp2) {
        
        return ($temp1 < 0 && $temp2 > 100) || ($temp1 > 100 && $temp2 < 0);
    }

    var_dump(checkTemperature(120, -1));   
    var_dump(checkTemperature(1, 120));    
    var_dump(checkTemperature(2, 120));   
    ?>

</body>
</html>