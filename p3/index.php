<?php
    session_start();
    if (isset($_SESSION['username'])){
        header("Location: welcome.php");
        exit();
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];
        if($username === "USER2" && $password === "password"){
            $_SESSION["username"] = $username;
            header("Location: welcome.php");
            exit();
        }
        else{
            $error_message="Invalid username and password Try agin !!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="" method="post">
        <label for="username">Username : </label>
        <input type="text" name="username" id="username" required><br><br>
        <label for="password">Password : </label>
        <input type="password" name="password" id="password" required><br><br>
        <input type="submit" value="Login"><br>
        <?php if(isset($error_message)){ ?>
            <p style="color:red;"><?php echo $error_message ?></p>
            <?php } ?>
    </form>
</body>
</html>