<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $marks = 85;
    if ($marks >= 90) {
        echo "Gread A";
    } elseif ($marks >= 80) {
        echo "Gread B";
    } elseif ($marks >= 70) {
        echo "gread C";
    } elseif ($marks >= 60) {
        echo "Gread D";
    } else {
        echo "Faill";
    }
    ?>
</body>

</html>