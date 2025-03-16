<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator</title>
</head>
<body>
    <h2>Age Calculator</h2>
    <form action="" method="post">
        <label for="username">Enter your birth date : </label>
        <input type="date" name="age">
        <input type="submit" value="Calculate Age">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $date1=$_POST["age"];
        $bday=new DateTime($date1);
        $today=new DateTime(date('m.d.y'));
        $diff=$today->diff($bday);
        printf('Your age is %d years , %d months , and %d days.', $diff->y,$diff->m,$diff->d);
        printf("\n");
        $currentDate=date('l,F,j,Y');
    }
    ?>
</body>
</html>