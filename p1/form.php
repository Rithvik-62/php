<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["message"];
    echo "<h2>Form submission result</h2> ";
    echo "<p><strong>Name: </strong>$name</p> ";
    echo "<p><strong>Email: </strong>$email</p> ";
    echo "<p><strong>message: </strong>$message</p> ";
}
else{
    echo "<p><strong>Access Denaied<p><strong>";
}
?>