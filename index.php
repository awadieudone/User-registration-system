<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><?php
        if(isset($_SESSION['logged'])) {
           echo $_SESSION['logged'];
           unset($_SESSION['logged']);
        //    header("Location: index.php");
        }
        
      ?></h1>
</body>
</html>