<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Login</title>
        <link rel="stylesheet" href="assets/css/loginCss.css">
    </head>
    <body>
    <form class="jsRegister" method="post" action="">
        <h2>Register</h2>
        <div class="email">
            <p>Email</p>
            <input class="insertMail" type="email" name="email" placeholder="email@email.com" required="required">
        </div>
        <div class="password">
            <p>Password</p>
            <input class="insertPassword" type="password" name="password" placeholder="Your Password" required="required">
        </div>
        <div class="jsError"></div>
        <div class="login">
            <button class="button" type="submit">Register</button>
        </div>
    </form>
    <?php require_once "inc/footer.php";?>
    </body>
</html>
