<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>lab 2_5</title>
</head>
<style>
div {
    margin-bottom: 10px;
}
</style>

<body>
    <form action="" method="GET">
        <div>a<input type="text" name="a"></div>
        <div>b<input type="text" name="b"></div>
        <div>c<input type="text" name="c"></div>

        <input type="submit">
    </form>

    <?php
    $a = 0;
    $b = 0;
    $c = 0;
    if ($_GET["a"] !== "") {
        $a = $_GET["a"];
    }

    if ($_GET["b"] != "") {
        $b = $_GET["b"];
    }
    if ($_GET["c"] != "") {
        $c = $_GET["c"];
    }

    // <?php
    //  $a = 7;
    //  $b = -2;
    //  $c =2;
    if ($a === 0) {
        if ($b === 0) {
            if ($c !== 0)
                echo "Phuong trinh vo nghiem";
            else
                echo "Phuong trinh vo so nghiem";
        } else {
            echo "Phuong trinh co nghiem: x = " . -$c / $b;
        }
    } else {
        $delta = pow($b, 2) - (4 * $a * $c);
        $x1 = (-$b - sqrt($delta)) / (2 * $a);
        $x2 = (-$b + sqrt($delta)) / (2 * $a);
        echo "delta = $delta";
        echo "<hr>  ";
        if ($delta < 0) echo "Phuong trinh vo nghiem";
        else if ($delta === 0) {
            echo "Phuong trinh co nghiem kep: x1 = x2 = " . (-$b) / (2 * $a);
        } else {
            echo "Phuong trinh co 2 nghiem phan biet x1 = " . $x1  . " | x2 = " . $x2;
        }
    }
    ?>
</body>

</html>