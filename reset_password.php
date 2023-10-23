<?php
require "db.php";

$data=$_POST;
if (isset($data['reset_password']))
{
    $errors = array();
    $password= $data['password'];
    $password2= $data['password2'];

    if( ($data['password']) == '' )
    {
        $errors[] = 'Введите пароль';
    }

    if( strlen($data['password']) < 4 )
    {
        $errors[] = 'Пароль слишком короткий';
    }

    if( $password != $password2 )
    {
        $errors[] = 'Passwords dont match';
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    $email = $_SESSION['email'];
    if(empty($errors))
    {
        R::exec("UPDATE users SET password='$password' WHERE email='$email'");
        header("refresh: 5; url=http://localhost/phptest/login.php");
        echo '<p>Your password was successfully changed</p>
<p>You\'ll be automatically redirected in <span id="count">5</span> seconds...</p>';
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
    <title>Reset your password</title>
</head>
<body>


<form id="login" action="reset_password.php" method="POST">

    <h1>Enter the new password</h1>

    <div id="password">
        <input placeholder="Password" type="password" name="password" value="<?php echo @$data['password']; ?>">
    </div>

    <div id="password2">
        <input placeholder="Repeat your password" type="password" name="password2" value="<?php echo @$data['password2']; ?>">
    </div>


    <button type="submit" name="reset_password" >Reset password</button>

</form>

<script type="text/javascript">

    window.onload = function(){

        (function(){
            var counter = 5;

            setInterval(function() {
                counter--;
                if (counter >= 0) {
                    span = document.getElementById("count");
                    span.innerHTML = counter;
                }
                // Display 'counter' wherever you want to display it.
                if (counter === 0) {
                    //    alert('this is where it happens');
                    clearInterval(counter);
                }

            }, 1000);

        })();

    }

</script>
</body>
</html>