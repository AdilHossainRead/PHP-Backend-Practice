<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $student=["Adil","Akash","Shamim","Adnan","Huraira"];
    echo "<h1>Using foreach</h1>";
    foreach($student as $s)
        {
            echo $s . "<br>";
        }

        echo "<h1>Using for index based</h1>";
        for($i=0;$i<count($student);$i++)
            {
                echo $student[$i] . "<br>";
            }
    ?>
</body>
</html>