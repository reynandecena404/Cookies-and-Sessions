<?php
    session_start();

    $_SESSION["Name"] = "Reynan Decena";
    $name = $_SESSION["Name"];
    echo $name;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Session</title>
</head>
<body>
    
</body>
</html>