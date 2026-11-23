
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>

<?php
    $name = "Nurul Suhaila binti Mohd Hanafi";
    $matricNo = "AI240076";
    $course = "Information Security";
    $year = "Year 3";
    $address = "Taman Universiti, Parit Raja"
?>

<table>
    <tr>
        <td>Name</td>
        <td><?php echo "$name"; ?></td>
    </tr>

    <tr>
        <td>Matric Number</td>
        <td><?php echo "$matricNo"; ?></td>
    </tr>

    <tr>
        <td>Course</td>
        <td><?php echo "$course"; ?></td>
    </tr>

    <tr>
        <td>Year of Study</td>
        <td><?php echo "$year"; ?></td>
    </tr>

    <tr>
        <td>Address</td>
        <td><?php echo "$address"; ?></td>
    </tr>
</table>

</body>
</html>

