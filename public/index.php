<?php

include '../partials/header.php';

include '../partials/mysqli_connect.php';

if (isset($_GET['random'])) {
	$query = 'SELECT id, quote, source, favorite FROM quotes ORDER BY RAND() DESC LIMIT 1';
} elseif (isset($_GET['favorite'])) {
	$query = 'SELECT id, quote, source, favorite FROM quotes WHERE favorite=1 ORDER BY RAND() DESC LIMIT 1';
} else {
	$query = 'SELECT id, quote, source, favorite FROM quotes ORDER BY date_entered DESC LIMIT 1';
}

if ($result = mysqli_query($dbc, $query)) {

	if ($row = mysqli_fetch_array($result)) {
		
		$htmlspecialchars = 'htmlspecialchars';
		echo "<div><blockquote>{$htmlspecialchars($row['quote'])}</blockquote>- 
					{$htmlspecialchars($row['source'])}<br>";
	
		if ($row['favorite'] == 1) {
			echo ' <strong>Yêu thích!</strong>';
		}
	
		echo '</div>';
	
		if (is_administrator()) {
			echo "<p><b>Quản trị Trích dẫn:</b> <a href=\"edit_quote.php?id={$row['id']}\">Sửa</a> <->
			<a href=\"delete_quote.php?id={$row['id']}\">Xóa</a>
			</p><br>";
		}
	}

} else {
	echo '<p class="error">Không thể lấy dữ liệu vì:<br>' . mysqli_error($dbc) .
			'.</p><p>Câu truy vấn là: ' . $query . '</p>';
}

mysqli_close($dbc);

echo '<p><a href="index.php">Mới nhất</a> <-> ' .
		'<a href="index.php?random=true">Ngẫu nhiên</a> <-> ' .
		'<a href="index.php?favorite=true">Yêu thích</a></p>';

include '../partials/footer.php';
?>