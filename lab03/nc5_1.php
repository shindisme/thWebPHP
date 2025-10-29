<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nang Cao 5.1</title>
</head>

<body>
    <?php
    include "./function.php";

    $n = 10;
    for ($i = 2; $i <= $n; $i++) {
        if (kiemtranguyento($i))
            echo "<h5>$i</h5>";
    }

    ?>
</body>

</html>