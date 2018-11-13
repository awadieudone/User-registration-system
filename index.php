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
        if(isset($_SESSION['message'])) {
           echo $_SESSION['message'];
           unset($_SESSION['message']);
        }
      ?></h1>
      <h2>Welcome, <?php echo $_SESSION['username']; ?></h2>

</body>
</html>