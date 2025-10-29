 <?php
    function BCC($n, $colorHead, $color1, $color2)
    {

    ?>
 <table>
     <tr bgcolor="<?= $colorHead ?>">
         <td colspan="3">Bảng cửu chương <?php echo $n; ?></td>
     </tr>
     <?php
            $html = "";
            for ($i = 1; $i <= 10; $i++) {
                $html .= "<tr>";
                if ($i % 2 == 0) {
                    $html .= "<tr bgcolor='$color2'>";
                } else
                    $html .= "<tr bgcolor='$color1'>";
                $kq = $n * $i;
                $html .= "<td>$n</td>";
                $html .= "<td>$i</td>";
                $html .= "<td>$kq</td>";
                $html .= "</tr>";
            }
            return $html;
            ?>
 </table>
 <?php
    }


    function kiemtranguyento($x) //Kiểm tra 1 số có nguyên tố hay không
    {
        if ($x < 2)
            return false;
        if ($x == 2)
            return true;
        for ($i = 2; $i <= sqrt($x); $i++)
            if ($x % $i == 0)
                return false;
        return true;
    }
    ?>