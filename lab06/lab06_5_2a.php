<?php
header("Content-Type: text/html; charset=UTF-8");
$url = 'https://stu-nghia.info/';
$contents = file_get_contents($url);


// Tạo đối tượng DOMDocument để phân tích HTML
$doc = new DOMDocument();
libxml_use_internal_errors(true);
$doc->loadHTML($contents);

// Tìm các tiêu đề tin tức
$xpath = new DOMXPath($doc);

// XPath chính: lấy <a> bên trong <h2 class="uk-h5 uk-margin-small">
$nodes = $xpath->query('//h2[@class="uk-h5 uk-margin-small"]/a');

echo "<h2>Tiêu đề tin trang Thầy Nghĩa:</h2>";
if ($nodes->length > 0) {
    foreach ($nodes as $node) {
        $title = trim($node->nodeValue);
        /** @var DOMelement $node  */   // Khai báo kiểu cho biến $node
        $link = $node->getAttribute('href');
        echo "<p><a href='$link' target='_blank'>$title</a></p>";
    }
} else {
    echo "<p>Không tìm thấy tiêu đề nào. Kiểm tra lại XPath hoặc cấu trúc HTML.</p>";
}