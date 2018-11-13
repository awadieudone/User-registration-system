<?php include "includes/header.php"; ?>
<?php include "includes/db.php"; ?>
<?php include "controllers/authentication.php"; ?>

<div class="header">
    <h3>Login</h3>
</div>

<div class="form" style="height:150px;">
    <form action="login.php" method="post">
        <div class="input-group">
            <label for="username">Enter Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="password">Enter Password</label>
            <input type="password" name="password" id="">
        </div>
        <input class="btn" name="submit-login" type="submit" value="Log in">

        <p>Not yet a member? <a href="register.php">Create Account</a></p>
    </form>
<?php include "includes/footer.php"; ?>