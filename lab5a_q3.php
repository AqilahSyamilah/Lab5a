<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
        function calculateArea($length, $width) {
            return $length * $width;
        }

        $length = 10; 
        $width = 5;   
        $area = calculateArea($length, $width);

        echo "<br> <b>The area of rectangle with a width of $width and a length of $length is $area </b>";
    ?>
</body>
</html>
