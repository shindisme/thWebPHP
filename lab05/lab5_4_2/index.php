<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get">
        <fieldset>
            <div>
                <label for="tenSP">Tên sản phẩm</label>
                <input type="text" name="tenSP" id="tenSP">
            </div>
            <div>
                <input type="radio" name="rdb" value="1" checked>Chính xác
                <input type="radio" name="rdb" value="0">Gần đúng
            </div>
            <div>
                <select name="sltCategory[]" multiple>
                    <option value="0" selected>Tất cả</option>
                    <option value="1">Loại 1</option>
                    <option value="2">Loại 2</option>
                    <option value="3">Loại 3</option>
                </select>
            </div>
            <input type="submit" value="Thêm">
        </fieldset>
    </form>
    <table border="1">
        <tr>
            <th>Tên sản phẩm</th>
            <th>Cách tìm</th>
            <th>Loại sản phẩm</th>
        </tr>
        <?php
        $cateMap = [
            '0' => 'Tất cả',
            '1' => 'Loại 1',
            '2' => 'Loại 2',
            '3' => 'Loại 3'
        ];
        if ($_GET['sltCategory'] == 0)
            echo "<script>alert('Ban da chon loại:  tất cả')</script>";
        if (isset($_GET['tenSP'])) {
            echo "<tr>";
            echo "<td>" . $_GET['tenSP'] . "</td>";
            echo "<td>" . ($_GET['rdb'] == 1 ? 'Chính xác' : 'Gần đúng') . "</td>";
            echo "<td>";
            foreach ($_GET['sltCategory'] as $v) {
                echo "$v ";
            }
            echo "</td>";
        }

        ?>


    </table>
</body>

</html>