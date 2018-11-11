<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h3>Register</h3>
    </div>
    <div class="form">
        <form action="rigister.php" method="post">
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
            <input class="btn" type="submit" value="Sign up">
            <p>Are you a member already?<a href="login.php">Log in</a></p>
        </form>
    </div>
</body>
</html>