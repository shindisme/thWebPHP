<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $s = 0;
    $i = 1;
    while ($s < 1000) {
        $s += ++$i;
    }
    echo $i
    ?>
</body>

</html>