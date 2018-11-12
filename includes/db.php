<?php
    $conn = mysqli_connect('localhost', 'root', '', 'register');
    if(!$conn) {
        die("DATABASE CONNECTION FAILED".mysqli_error($conn));
    }
?>