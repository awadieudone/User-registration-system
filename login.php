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
            <input class="btn" type="submit" value="Log in">

            <p>Not yet a member? <a href="rigister.php"></a></p>
        </form>
    </div>
</body>
</html>