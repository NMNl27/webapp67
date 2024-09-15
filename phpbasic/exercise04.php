<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercise04</title>
</head>
<body>
    <?php
    function count_aa($str) {
        $ctr_aa = 0; 
        $i = 0; 

        while ($i < strlen($str) - 1) {
        
            if (substr($str, $i, 2) == "aa") {
                $ctr_aa++; 
            }
            $i++; 
        }

        return $ctr_aa; 
    }

        echo test("bbaaccaag")."\n";
        echo "<br>";
        echo test("jjkiaaasew")."\n";
        echo "<br>";
        echo test("JSaaakoiaa")."\n";
    ?>

</body>
</html>