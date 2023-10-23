<?php
require "db.php";
$data=$_POST;
if (isset($data['do_signup']))
{
    // здесь регистрируем
    $errors = array();
    if( trim($data['login']) == '' )
    {
        $errors[] = 'Введите логин';
    }

    if( trim($data['email']) == '' )
    {
        $errors[] = 'Введите email';
    }

    if( ($data['password']) == '' )
    {
        $errors[] = 'Введите пароль';
    }

    if( strlen($data['password']) < 4 )
    {
        $errors[] = 'Пароль слишком короткий';
    }

    if( ($data['password_2']) != $data['password'] )
    {
        $errors[] = 'Пароли не совпадают';
    }
    if( R::count('users', "login = ?", array($data['login'])) > 0)
    {
        $errors[] = 'Пользователь с таким логином уже существует!';
    }
    if( R::count('users', "email = ?", array($data['email'])) > 0)
    {
        $errors[] = 'Пользователь с таким email уже существует!';
    }



    if( empty($errors)  )
    {
        // все хорошо, регистрируем
        header("Location: index.php");
        $token = bin2hex(random_bytes(50));
        $user = R::dispense('users');
        $_SESSION['logged_user'] = $user;
        $user->login = $data['login'];
        $user->email = $data['email'];
        $user->token = $token;
        $user->verification = 'unverified';
        $user->password = password_hash($data['password'],
            PASSWORD_DEFAULT);
        require_once "mail_sender.php";
        sendVerificationMail($data['email'], $token);
        R::store($user);
        echo '<div style="color: green;">Вы успешно зарегистрированы</div><hr>';
    }
    else
    {

        echo '<div style="color: red;">' .array_shift($errors).'</div><hr>';

    }

}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
<form id="signup" action="signup.php" method="POST">

    <h1>Join us and get access to all functions of the website</h1>
	<p>
		<input id="login" placeholder="Login" type="text" name="login" value="<?php echo @$data['login']; ?>">
	</p>
	
	<p>
		<input id="email" placeholder="Email" type="text" name="email" value="<?php echo @$data['email']; ?>">
	</p>
	
	<p>
		<input id="pass" placeholder="Password" type="password" name="password" value="<?php echo @$data['password']; ?>">
	</p>
	
	<p>
		<input id="pass-cnfrm" placeholder="Confirm password" type="password" name="password_2" value="<?php echo @$data['password_2']; ?>">
	</p>

    <p>
    <input type="button" value="Log in" id="tp" onClick='location.href="http://localhost/phptest/login.php"'>
    </p>

	<p>
		<button type="submit" name="do_signup" >Create account</button>
	</p>



</form>

<script type="text/jаvascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

</body>
</html>