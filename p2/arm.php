<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong numbers</title>
</head>
<body>
    <h2>Armstrong numbers</h2>
    <form action="" method="post">
        <label for="number">Enter a number : </label>
        <input type="text" name="number" id="number" value="<?php echo isset($_POST['number'])?htmlspecialchars($_POST['number']):'';?>"required>
        <input type="submit" value="Check">
    </form>
    <?php
    function isarmstrong($num){
        $originalnumber = $num;
        $sum = 0;
        $digits = strlen($num);
        while($num>0){
            $digit = $num%10;
            $sum += pow($digit,$digits);
            $num = (int)$num/10;
        }
        return $originalnumber==$sum;
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $inputnumber = $_POST["number"];
        if(is_numeric($inputnumber)&& $inputnumber>0 && $inputnumber== (int)$inputnumber){
            echo "<h3>Result : </h3>";
            if(isarmstrong($inputnumber)){
                echo "<p>$inputnumber is an armstrong number</p>";
                echo "<p>armstrong number from the range 1 to $inputnumber </p>";
                for($i= 1;$i<$inputnumber;$i++){
                    if(isarmstrong($i)){
                        echo "$i ";
                    }
                }
            }else{
                echo "<p>$inputnumber is not an armstrong number</p>";
            }
        }
        else{
            echo "<p>Please Enter a valid integer ";
        }
    }
?>
</body>
</html>