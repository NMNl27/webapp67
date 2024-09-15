<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercise01</title>
</head>
<body>
    <?php
    function addChar($str) {
        if (strlen($str) >= 1) {

            $lastChar = substr($str, -1);
            return $lastChar . $str . $lastChar;
        }
        return $str; 
    }
    echo addChar("Red") . "\n";    
    echo addChar("Green") . "\n";  
    echo addChar("1") . "\n";      
    ?>
</body>
</html>