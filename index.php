<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $_nombre = 666; 
        $_nb = rand(0,1000);
        $_i = 0
        while($_nb != $_nombre) {
            $_nb = rand(0, 1000);
            $_i += 1;
        }
        echo $_i;
    ?>
</body>
</html>