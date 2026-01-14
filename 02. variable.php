<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variable assaing</title>
</head>

<body>
    <?php
    echo "<h1>variable assaing</h1>";
    $name = 'Adil Hossain';
    $age = 21;
    $cgpa = 3.02;
    $is_student = true;
    echo "My Name Is ". $name . '<br>';
    echo "I am ". $age ." years old". "<br>";
    echo $cgpa . "<br>";
    echo "Am I sttudent :{$is_student} <br> ";
    echo "My cgpa {$cgpa} ";
    ?>
</body>

</html>