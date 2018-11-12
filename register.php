<?php include "includes/header.php"; ?>
<?php include "includes/db.php"; ?>
<?php
session_start();
$_SESSION['registered'] = "";

    if(isset($_POST['submit'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "INSERT INTO users(firstname,lastname,username,email,password) 
        VALUES('$firstname','$lastname','$username','$email','$password')";
        $insert_result = mysqli_query($conn,$query);

        if(!$insert_result) {
            die("Insertion failure".mysqli_error(($conn)));
        } else {
            $_SESSION['registered'] = "You are registered successfully";
            
        }
    }
?>
    <h2><?php
        if($_SESSION['registered']){
            echo $_SESSION['registered'];
        }
    ?></h2>
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
            <input class="btn" type="submit" name="submit" value="Sign up">
            <p>Are you a member already?<a href="login.php">Log in</a></p>
        </form>
    <?php include "includes/footer.php"; ?>