<?php

// Tắt các báo cáo lỗi
mysqli_report(MYSQLI_REPORT_OFF);

// Ký tự @ dùng để tắt các cảnh bảo (warning) sinh ra bởi câu lệnh
<<<<<<< HEAD
$dbc = @mysqli_connect('localhost', 'root', '', 'ct275_web');
=======
$dbc = @mysqli_connect('localhost', 'root', '', 'sds');
>>>>>>> f9370739cacc3a25f2205af501b4873c591cc6a1
if (!$dbc) {
	echo '<p class="error">Không thể kết nối đến CSDL vì:<br>' .
		mysqli_connect_error() . '.</p>';
	include 'footer.php';
	exit();
}
mysqli_set_charset($dbc, 'utf8');
