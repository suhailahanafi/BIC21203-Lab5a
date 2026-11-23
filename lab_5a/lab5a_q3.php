
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>

<?php

function calculateArea($width, $length) {
    return $width * $length;
}

$width = 5;
$length = 10;

$area = calculateArea($width, $length);

echo "The area of a rectangle with a width of "
     . $width . " and " . $length . " is " . $area;

?>

</body>
</html>
