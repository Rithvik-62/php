<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h2>PHP Calculator</h2>
    <form action="" method="post">
    <input type="text" name="num1" id="num1" pattern="[0-9]+" title="Please enter a valid number" placeholder="Enter the first number" value="<?php echo isset($_POST['num1'])? htmlspecialchars($_POST['num1']):''?>" required>
    <select name="operation" id="operation" required>
        <option value="add">+</option>
        <option value="sub">-</option>
        <option value="mul">*</option>
        <option value="div">/</option>
    </select>
    <input type="text" name="num2" id="num2" pattern="[0-9]+" title="Please enter a valid number" placeholder="Enter the first number" value="<?php echo isset($_POST['num2'])? htmlspecialchars($_POST['num2']):''?>" required>
    <input type="submit" value="Calculate">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];
        if(!is_numeric($num1) || !is_numeric($num2)){
            echo "<p style='color:red;'>Please enter a valid number</p>";
        }else{
            switch($operation){
                case "add":
                    $result=$num1+$num2;
                    break;
                case "sub":
                    $result=$num1-$num2;
                    break;
                case "mul":
                    $result=$num1*$num2;
                    break;
                case "div":
                    if($num2==0){
                        echo "<p style='color:red;'>ERROR : division by zero is not possible</p>";
                    }
                    else{
                        $result=$num1/$num2;
                    }
                    break;
            }
            if(isset($result)){
                echo "<p>Result : $result </p>";
            }
        }
    }
    ?>
</body>
</html>