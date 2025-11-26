<?php
$url = 'https://stu.edu.vn/'; // URL của trang web cần lấy links

$html = file_get_contents($url); // Lấy nội dung trang web

// Kiểm tra kết quả tải
if (!$html) {
    echo "👉 Không tải được trang . $url <br>";
} else {
    echo "✔️ Tải trang thành công. $url <br>";
}

// Tạo đối tượng DOMDocument
$doc = new DOMDocument();
libxml_use_internal_errors(true);  // Để xử lý các lỗi HTML không hợp lệ
$doc->loadHTML($html); // Tải nội dung vào đối tượng DOM

// Tìm tất cả các thẻ <a>
$links = $doc->getElementsByTagName('a');

$count = 0; // Khởi tạo biến đếm
$maxLinks = 30;  // Giới hạn số lượng liên kết là 30

// Duyệt qua các link và in ra
foreach ($links as $link) {
    if ($link instanceof DOMElement) { //Kiểm tra kiểu của $link là DOMElement => Ko kiểm cũng chả sao!
        echo $link->getAttribute('href') . "<br>";
    }
    $count++;
    if ($count >= $maxLinks) {
        break;
    }
}