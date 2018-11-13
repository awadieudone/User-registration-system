<?php include "includes/header.php"; ?>
<?php include "includes/db.php"; ?>
<?php include "controllers/authentication.php"; ?>

<div class="header">
    <h3>Register</h3>
</div>

<div class="form">
    <form action="register.php" method="post">
        <div class="input-group">
            <label for="firstname">Enter Firstname</label>
            <input type="text" name="firstname">
        </div>
        <div class="input-group">
            <label for="lastname">Enter Lastname</label>    
            <input type="text" name="lastname">
        </div>
        <div class="input-group">
            <label for="username">Enter Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="email">Enter Email</label>
            <input type="email" name="email">
        </div>
        <div class="input-group">
            <label for="password">Enter Password</label>
            <input type="password" name="password" id="">
        </div>
        <input class="btn" type="submit" name="submit-register" value="Sign up">
        <p>Are you a member already?<a href="login.php">Log in</a></p>
    </form>
<?php include "includes/footer.php"; ?>