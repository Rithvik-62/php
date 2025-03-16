<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dictionary</title>
</head>
<body>
    <h2>Dictionary</h2>
    <form action="" method="post">
        <label for="word">Enter your word : </label>
        <input type="text" name="word" id="word">
        <input type="submit" value="Search"><br>
    </form>
    <?php
    $dictionary=array(
        "apple"=>"A fruit",
        "bag"=>"used for carry things",
        "ice"=>"Forzen water",
        "gun"=>"A weapon",
        "dog"=>"A pet animal",
        "ant"=>"a samll insect",
        "lock"=>"used to open lock",
        "ink"=>"a liquied used for writing",
        "cup"=>"used for drinking",
        "fan"=>"give cool air",
    );
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $word=strtolower($_POST["word"]);
        if(array_key_exists($word,$dictionary)){
            $meanning=$dictionary[$word];
            echo "<br><strong>Meanning : </strong>$meanning ";
        }else{
            echo "<p style='color:red;'>word is not found</p>";
        }
    }
    ?>
</body>
</html>