<?php include "includes/header.php"; ?>
<?php include "includes/db.php"; ?>
<?php
session_start();
$_SESSION['logged'] = "";

    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $select_result= mysqli_query($conn, $query);
    if(mysqli_num_rows($select_result)) {
        $_SESSION['logged'] = "You are successfully logged in";
        header("Location: index.php");
        exit(0);
        // echo "Logged in";
    } else {
        die("Please <h2><a href='register.php'>sign up</a></h2> first");
    }
    

    
    }
?>

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
            <input class="btn" name="submit" type="submit" value="Log in">

            <p>Not yet a member? <a href="register.php">Create Account</a></p>
        </form>
    <?php include "includes/footer.php"; ?>