<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercise03</title>
</head>
<body>
    <?php
    function checkRange($x, $y) {
    
        return ($x >= 20 && $x <= 50) || ($y >= 20 && $y <= 50);
    }

    var_dump(checkRange(20, 84));   
    var_dump(checkRange(25, 40));  
    var_dump(checkRange(14, 50));   
    var_dump(checkRange(4, 60));    
    ?>

</body>
</html>