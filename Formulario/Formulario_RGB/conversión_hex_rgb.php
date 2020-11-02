<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hexadecimal a RGB</h1>
    <?php
        
        echo "El color Hexadecimal es: ". ($_POST["color1"])."<hr>";
        
        $color_decimal = $_POST["color1"];
        /*
        echo "Prueba separacion carácteres <br>";
        echo substr("$color_decimal",1, 2)."<br>";
        echo substr("$color_decimal",3, 2)."<br>";
        echo substr("$color_decimal",5, 7)."<br> <hr>";
        */

        echo "R:".hexdec(substr("$color_decimal",1, 2))."<br>";
        echo "G:".hexdec(substr("$color_decimal",3, 2))."<br>";
        echo "B:".hexdec(substr("$color_decimal",5, 7))."<br> <br>";
        echo "RGB (".hexdec(substr("$color_decimal",1, 2)).",".hexdec(substr("$color_decimal",3, 2)).",".hexdec(substr("$color_decimal",5, 7)).")";
        
    ?>
</body>
</html>