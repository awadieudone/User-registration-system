<?php

session_start();

    if(isset($_POST['submit-register'])) {
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
            $_SESSION['username'] = $username; 
            $_SESSION['message'] = "You are registered successfully";
            header('location: index.php');
            exit(0);
        }
    }


    if(isset($_POST['submit-login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $select_result= mysqli_query($conn, $query);

    $user = mysqli_fetch_assoc($select_result);
    
    if(mysqli_num_rows($select_result) > 0) {
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username']; 
        $_SESSION['message'] = "You are successfully logged in";
        header("Location: index.php");
        exit(0);
    } else {
        die("Please <h2><a href='register.php'>sign up</a></h2> first");
    }
    

    
    }