<?php
//Set Cookie
$expireTime = time() + 86400;
setcookie("Name","Reynan Decena", $expireTime);
setcookie("Age","35", $expireTime);

//Unset Cookie
$expireTime_unSet = time() - 86400;
setcookie("Name","Reynan Decena", $expireTime_unSet);

if(isset($_COOKIE['Name'])){
echo 'Cookie is set!';
}else{
echo 'Cookie is not set';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unset Cookie</title>
</head>
<body>
    
</body>
</html>