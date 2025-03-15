<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: index.php");
        exit();
    }
    if(isset($_GET['logout'])&& $_GET['logout']==1){
        session_destroy();
        $_SESSION=array();
        header("Location: index.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome <?php echo $_SESSION['username']; ?></h2>
    <br>
    <p>This is a secured area you have logged in</p>
    <br>
    <a href="welcome.php?logout=1">logout</a>
</body>
</html>