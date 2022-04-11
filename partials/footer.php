<!-- END CHANGEABLE CONTENT. -->
<?php
echo '</br>';
if (isset($_SESSION['username']) && $_SESSION['username']){
	echo 'Bạn đã đăng nhập với tên là '.$_SESSION['username']."<br/>";
	echo 'Click vào đây để <a href="logout.php">Logout</a>';
}
// else{
// 	echo 'Bạn chưa đăng nhập <a href="login.php">Đăng nhập</a>';
// }
?>
	</div><!-- container -->
	<div id="footer">Content &copy; 2022</div>
	<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>
	<script src="js/footer.js"></script>
</body>
</html>