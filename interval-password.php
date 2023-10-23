<?php
require_once 'db.php';

$user = R::dispense('users'); //работаем с таблицой

if(isset($_GET["password-token"]))
{
    $token = $_GET["password-token"];

    $email = R::getCell("SELECT email FROM users WHERE token = '$token'");

    $_SESSION['email'] = $email;
    header('location:reset_password.php');
    exit(0);
}
else {
    echo "Incorrect link";
}
?>
<!doctype html>
<html><head>
    <title>Подтверждение почты</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

</body>
</html>
