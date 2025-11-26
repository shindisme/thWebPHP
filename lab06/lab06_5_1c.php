<?php
// Lấy toàn bộ nội dung HTML từ trang báo điện tử Dân trí
$url = file_get_contents('https://dantri.com.vn/');

// Khởi tạo đối tượng DOM để phân tích HTML
$doc = new DOMDocument(); // Tạo đối tượng DOM

// Bỏ qua các lỗi cú pháp HTML khi load (tránh cảnh báo)
libxml_use_internal_errors(true);

// Nạp nội dung HTML vừa lấy vào đối tượng DOM
$doc->loadHTML($url);

// Lấy tất cả các thẻ <img> trong tài liệu HTML
$images = $doc->getElementsByTagName('img');

// Biểu thức chính quy kiểm tra file hình ảnh hợp lệ
$file_pattern = '/^[a-zA-Z0-9_-]+\.(jpg|jpeg|png|gif)$/';

// Duyệt qua từng thẻ <img> để kiểm tra tên file ảnh
$count = 0;
$maxCount = 20;
foreach ($images as $image) {
    $count++;
    /** @var DOMElement $image */

    // Lấy đường dẫn (src) của ảnh
    $src = $image->getAttribute('src');

    // Lấy tên file từ đường dẫn ảnh
    $file_name = basename($src); // basename() trả về phần tên file

    // Kiểm tra tên file có khớp với biểu thức chính quy không
    if (preg_match($file_pattern, $file_name)) {
        // Hợp lệ thì in ra thông báo
        echo "Hình ảnh hợp lệ: $file_name\n" . "<br>";
    } else {
        // Không hợp lệ cũng in thông báo
        echo "Hình ảnh không hợp lệ: $file_name\n" . "<br>";
    }
    if ($count >= $maxCount) {
        break;
    }
}