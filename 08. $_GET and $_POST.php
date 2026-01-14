<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="08. $_GET and $_POST.php" method="get">
        
        <label for="User name">Enter Full Name:</label>
        <input type="text" id="User name" name="name" placeholder="Mr. Adil Hossain" required><br>

        <label for="Phone Number">Enter Phone Number:</label>
        <input type="number" id="Phone Number" name="phone" placeholder="01960******"><br>

        <label for="email">Email address:</label> <br>
        <input type="email" id="email" name="email" placeholder="adil....@gmail.com" required><br>

        <label for="Password">Enter Your Password:</label><br>
        <input type="password" id="password" name="password" placeholder="enter strong password" required><br>
        
        <input type="submit" value="Log in">
    </form>
</body>

</html>
<?php
echo "{$_GET["name"]} <br>";
echo "{$_GET["phone"]} <br>";
echo "{$_GET["email"]} <br>";
echo "{$_GET["password"]} <br>";
?>