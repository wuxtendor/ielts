<?php
require "db.php";
$data=$_POST;
$po4ta = $data['email'];
if (isset($data['forgot-password']))
{
    $errors = array();
    $email = R::findOne('users', 'email = ?', array($data['email']));
    if( $email )
    {
        // email существует
        $token = R::getCell("SELECT token FROM users WHERE email = '$po4ta' ");
        if ( $token ) {
            require_once 'mail_sender.php';
            sendPasswordRecoveryEmail($email, $token);
            header("Location: stupidtext.php");
        } else
        {
            echo 'token ne naiden';
        }
    } else
    {
        $errors[] = 'User with this email not found!';
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
    <title>Forgot password</title>
</head>
<body>


<form id="login" action="password_recovery.php" method="POST">

    <h3>Password recovery</h3>
    <p>Enter the email address you used to sign up on the site in order to recover your account.</p>
    <p>
        <label>Input your email</label>
        <input placeholder="Email" type="email" name="email" value="<?php echo @$data['email']; ?>">
    </p>

    <p>
        <button type="submit" name="forgot-password">Recover password</button>
    </p>
</form>
</body>
</html>