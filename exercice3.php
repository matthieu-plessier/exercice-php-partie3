<?php
$number1 = 100;
$number2 = 50;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 3</title>
</head>
<body>
<?php
    while ($number1 >= 10) {
        echo $number1 * $number2;
        echo"<br>";
        $number1--;
    }
?>
    
</body>
</html>