<?php
require "db.php";

$data=$_POST;
if (isset($data['check-pas']))
{
	$errors = array();
	if( password_verify($data['password'], $_SESSION['logged_user']->password))
        {
            // все хорошо. пропускаем на редакцию данных
            header("Location: edit.php");
        } else
        {
            $errors[] = 'Пароль неправильно введен!';
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


<form id="form" action="edit-interval.php" method="POST">

    <h4>Please enter your password</h4>

    <div id="password">
        <input placeholder="Password" type="password" name="password" value="<?php echo @$data['password']; ?>">
    </div>

    <button type="submit" name="check-pas">Continue</button>

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