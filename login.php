<?php
require "db.php";

$data=$_POST;
if (isset($data['do_login']))
{
    $errors = array();
    $user = R::findOne('users', 'login = ?', array($data['login']));
    if( $user )
    {
        // логин существует
        if( password_verify($data['password'], $user->password))
        {
            // все хорошо. логиним пользователя
            header("Location: index.php");
            $_SESSION['logged_user'] = $user;
        } else
        {
            $errors[] = 'Пароль неправильно введен!';
        }
    } else
    {
        $errors[] = 'Пользователь с таким логином не найден!';
    }

    if( ! empty($errors)  )
    {

        echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';

    }

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>


<form id="login" action="login.php" method="POST">

    <h1>Sign In With</h1>
    <div id="google-btn">
        <img src="css/images/google.svg" alt="google" width="100px">
    </div>

    <div id="username">
		<input placeholder="Username" type="text" name="login" value="<?php echo @$data['login']; ?>">
    </div>

    <div id="password">
		<input placeholder="Password" type="password" name="password" value="<?php echo @$data['password']; ?>">
    </div>

    <div id="password2">
        <input type="button" value="Create account" id="tp" onClick='location.href="http://localhost/phptest/signup.php"'>
    </div>
		<button type="submit" name="do_login" >Log in</button>

	<div id="recover" style="font-size: 0.8em; text-align: center;"><a href="password_recovery.php">Forgot password?</a></div>
</form>
</body>
</html>