<?php

// Tắt các báo cáo lỗi
mysqli_report(MYSQLI_REPORT_OFF);

// Ký tự @ dùng để tắt các cảnh bảo (warning) sinh ra bởi câu lệnh

$dbc = @mysqli_connect('localhost', 'root', '', 'ct275_web');

//if (!$dbc) {
//	echo '<p class="error">Không thể kết nối đến CSDL vì:<br>' .
//		mysqli_connect_error() . '.</p>';
//	include 'footer.php';
//	exit();
//}
mysqli_set_charset($dbc, 'utf8');
