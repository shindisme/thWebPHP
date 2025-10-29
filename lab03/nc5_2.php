<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nang Cao 5.1</title>
</head>

<body>
    <form method="GET">
        <input type="text" name="string" />
        <input type="submit" value="Kiểm tra" />
    </form>
    <?php


    function checkChuoiDoiXung($string)
    {
        $stringArr = explode("", $_GET[$string]);
        $reverse = array_reverse($stringArr);
        foreach ($stringArr as $v) {
            if ($v != $reverse)
                return false;
        }
        return true;
    }



    if (isset($_GET['string'])) {
        if (checkChuoiDoiXung('string')) {
            echo "Là chuỗi đối xứng";
        } else echo "Sài";
    }
    ?>
</body>

</html>