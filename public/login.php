<?php

define('TITLE', 'Login');
include '../partials/header.php';

$loggedin = false;
$error = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if (!empty($_POST['email']) && !empty($_POST['password'])) {

		if ( (strtolower($_POST['email']) == 'me@example.com') && ($_POST['password'] == 'testpass') ) {
			$_SESSION['user'] = 'me';
			$loggedin = true;
		} else {
			$error = 'Địa chỉ email và mật khẩu không khớp!';
		}

	} else {
		$error = 'Hãy đảm bảo rằng bạn cung cấp đầy đủ địa chỉ email và mật khẩu!';
	}

}

if ($error) {
	echo '<p class="error">' . $error . '</p>';
}

if ($loggedin) {
	echo '<p>You are now logged in!</p>';
} else {
	echo '<h2>Login Form</h2>
	<form action="login.php" method="post">
	<p><label>Địa chỉ Email <input type="email" name="email"></label></p>
	<p><label>Mật khẩu <input type="password" name="password"></label></p>
	<p><input type="submit" name="submit" value="Đăng nhập!"></p>
	</form>';
}

include '../partials/footer.php';
?>