<?php
$url = "http://thethao.vnexpress.net/";
$content = file_get_contents($url);
if ($content !== false) {
    // Biểu thức chính quy tìm tất cả các thẻ div có phần tử con chứa class="title_news"
    $pattern = '/<div[^>]*>.*?<[^>]*class=["\']title_news["\'][^>]*>.*?<\/div>/is';

    // Mảng để lưu kết quả
    preg_match_all($pattern, $content, $arr);

    // Kiểm tra và in ra kết quả
    if (!empty($arr[0])) {
        // Duyệt qua từng phần tử trong mảng kết quả
        foreach ($arr[0] as $divContent) {
            // In ra nội dung của từng thẻ div có ptu con chứa class="title_news"
            echo "Nội dung: <br>" . htmlspecialchars($divContent) . "<br><br>";
        }
    } else {
        echo "Không tìm thấy các thẻ <div class=\'title_news\'>";
    }
} else {
    echo "Không thể tải nội dung trang.";
}