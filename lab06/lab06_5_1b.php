<?php
$url = 'https://dantri.com.vn/';
$url = 'http://vietnamnet.vn/';
$html = file_get_contents($url);

// Kiểm tra kết quả
if (!$html) {
    echo "Không thể tải nội dung trang. $url <br>";
} else {
    echo "✔️ Tải thành công trang $url. <br>";
}

$email_pattern = '/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}/'; // Biểu thức chính quy cho email

$phone_pattern = '/(\+?[0-9]{1,4}[ -]?)?(\(?\d{3}\)?[ -]?)?\d{3}[ -]?\d{4}/'; // Biểu thức chính quy cho số điện thoại

// Tìm email trong trang web
preg_match_all($email_pattern, $html, $emails);

// Tìm số điện thoại trong trang web
preg_match_all($phone_pattern, $html, $phones);

echo "Emails:\n";
echo "<pre>";
var_dump($emails[0]);
echo "</pre>";

// Khởi tạo biến đếm
$count = 0;
$maxLinks = 20;  // Giới hạn số lượng liên kết là 20

echo "\nPhones:\n <br>";

// Duyệt qua các link và in ra
foreach ($phones[0] as $phone) {
    echo $count + 1 . ': ' . $phone . "<br>";
    $count++;
    if ($count >= $maxLinks) {
        break;
    }
}