<?php
require "db.php";
$data=$_POST;
    if (isset($data['edit'])) {
        header("location: edit-interval.php");
    }
?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css.css">
</head>
<body>
<form action="acc.php" method="POST">
    <input type="button" value="Main page" id="tp" onClick='location.href="http://localhost/phptest/index.php"'><br/>

   <div id="login">
            Current Name: <?php echo  $_SESSION['logged_user']->login; ?></br>
   </div>
            
    <div id="email">
            Current E-mail: <?php echo  $_SESSION['logged_user']->email; ?></br>
    </div>

    <div id="verification">
    Email verification status: <?php echo  $_SESSION['logged_user']->verification; ?></br>
    </div>
    <button type ="submit" name ="edit" id="update">Edit</button><br/>

</form>
</body>
</html>