<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>RGB a Hexadecimal</h1>
    <?php
        echo "R: ".$_POST["num1"].", G: ".$_POST["num2"].", B:". $_POST["num3"]."<br>";
        echo "El color Hexadecimal es: #" . dechex($_POST["num1"]).dechex($_POST["num2"]).dechex($_POST["num3"]) . "<br>";
    ?>

    <?php
        echo "El color RGB es: ". hexdec($_POST["color1"]);
    ?>
</body>
</html>