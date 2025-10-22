<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>lab 2_5</title>
</head>

<body>
<?php
	$a = 5;
    $b = 2;
    $soNguyen = $a/$b;
    echo "a = $a", " | b = $b";
    echo "<hr>";
	
    echo "Phan nguyen la ". (int)$soNguyen ;
    echo "<hr>";
    echo "Phan du la ". $a%$b;

?>
</body>
</html>