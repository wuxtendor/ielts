<?php
require_once 'db.php';

$user = R::dispense('users'); //работаем с таблицой

$token = $_GET["token"]; //extract token , no 4et ne pashet

$truetoken = R::getCell("SELECT token FROM users WHERE token = '$token'"); //берем токен  с бд

if ( $truetoken )
{
    header("refresh: 5; url=http://localhost/phptest/index.php");
    echo '<p>Your email was successfully verified</p>
<p>You\'ll be automatically redirected in <span id="count">5</span> seconds...</p>';
    $_SESSION['logged_user']->verification = 'verified';
    R::exec( "UPDATE users SET verification = 'verified' WHERE token ='$token'");
    exit(0);
}
else {
    echo "Некорректная ссылка";
}
?>
<!doctype html>
<html><head>
    <title>Подтверждение почты</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

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
