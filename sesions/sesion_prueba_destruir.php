<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destruir Sesion</title>
</head>

<body>
    <?php
    session_start();
    $_SESSION = [];
    print_r($_SESSION);
    session_destroy();
    ?>
</body>

</html>