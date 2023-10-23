<?php
require "db.php";

$data=$_POST;
if(isset($data['save']))
{
    $errors = array();
    $newlogin = $data['newlogin'];
    $newemail = $data['newemail'];
    if( $newlogin and $newemail == '' )
    {
        $errors[] = 'Input new email or login';
    }
        if(empty($errors))
        {
            $id = $_SESSION['logged_user']->id;
            $_SESSION['logged_user']->login = $newlogin;
            $_SESSION['logged_user']->email = $newemail;
		    R::exec("UPDATE users SET login='$newlogin' WHERE id='$id'");
            R::exec("UPDATE users SET email='$newemail' WHERE id='$id'");
            header("refresh: 3; url=http://localhost/phptest/acc/acc.php");
            echo '<div style="color: green;">Data changed successfully</div><br\>
            <p>You\'ll be automatically redirected in <span id="count">3</span> seconds...</p><hr>';
        } else
        {
            echo array_shift($errors);
        }
}

	if (isset($data['cancel'])) {
        header("location: acc.php");
    }
?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css.css">
</head>
<body>
<form action="edit.php" method="POST">
    <input type="button" value="Main page" id="tp" onClick='location.href="http://localhost/phptest/index.php"'><br/>

   <div id="login">
            <input placeholder="<?php echo $_SESSION['logged_user']->login;?>" name="newlogin" value="<?php echo @$data['newlogin']; ?>"></br>
   </div>

    <div id="email">
            <input value="<?php echo @$data['newemail']; ?>" name="newemail" placeholder="<?php echo $_SESSION['logged_user']->email;?>"></br>
    </div>

    <button type ="submit" name ="save" id="save.btn">save</button><br/>
    <button type ="submit" name ="cancel" id="cancel.btn">cancel</button><br/>

</form>
<script type="text/javascript">

    window.onload = function(){

        (function(){
            var counter = 3;

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