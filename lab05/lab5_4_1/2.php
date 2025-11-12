<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include './1.php';
    if (isset($_GET['id'])) {
        echo "<h1>Id la " . $_GET['id'] . " </h1>";
    }

    ?>
</body>

</html>