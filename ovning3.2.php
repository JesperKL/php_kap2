<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="">
    </head>
    <body>
    <?php
        if (!empty($_REQUEST['user']) && !empty($_REQUEST['pass'])) {


        $user = $_REQUEST['user'];
        $pass = $_REQUEST['pass'];

        if ($user != "Jesper" and $pass != "passWD") {
    ?>
        <form action="ovning3.2.php" method="post">
             <fieldset>
                <legend>Inloggningsformulär</legend>
                <label>Username</label>
                <input type="text" name="user"><br>
                <label>Password</label>
                <input type="password" name="pass"><br>

                <input type="submit" value="Logga in">
             </fieldset>
             </form>
    <?php

        } elseif ($user == "Jesper" and $pass == "passWD") {
    ?>
        <h2>Du är Inloggad!</h2>
    <?php
        } else {
            ?>
             <form action="ovning3.2.php" method="post">
             <fieldset>
                <legend>Inloggningsformulär</legend>
                <label>Username</label>
                <input type="text" name="user"><br>
                <label>Password</label>
                <input type="password" name="pass"><br>

                <input type="submit" value="Logga in">
             </fieldset>
             </form>
        <?php
        }
        }
    ?>
    </body>
</html>
