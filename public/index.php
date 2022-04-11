<?php

include '../partials/header.php';

include '../partials/mysqli_connect.php';

// if (isset($_GET['random'])) {
// 	$query = 'SELECT id, quote, source, favorite FROM quotes ORDER BY RAND() DESC LIMIT 1';
// } elseif (isset($_GET['favorite'])) {
// 	$query = 'SELECT id, quote, source, favorite FROM quotes WHERE favorite=1 ORDER BY RAND() DESC LIMIT 1';
// } else {
// 	$query = 'SELECT id, quote, source, favorite FROM quotes ORDER BY date_entered DESC LIMIT 1';
// }

// if ($result = mysqli_query($dbc, $query)) {

	

// } else {
// 	echo '<p class="error">Không thể lấy dữ liệu vì:<br>' . mysqli_error($dbc) .
// 			'.</p><p>Câu truy vấn là: ' . $query . '</p>';
// }

mysqli_close($dbc);

include '../partials/product.php';
include '../partials/footer.php';
?>