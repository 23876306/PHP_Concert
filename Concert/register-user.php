<html>
<head>
<meta charset="utf-8">
<title>演唱會訂票系統</title>
<style type = 'text/css'>
	header, section, footer, aside, nav, article, figure, figcaption {display: block}
	body {
		color: #666666;
		backgroung-color: #f9f8f6;
		background-position: center;
		font-family: Georgia, times, serif;
		line-height: 1.4em;
		margin: 0px;
	}
	.wrapper {
		width: 1200px;
		margin: 10px auto 10px auto;
		border: 2px solid #000000;
		backgroung-color: #ffffff;
	}
	header {
		height: 100px;
		background-color:#D9D9D9;
	}
	h1 {
		width: 940px;
		height: 110px;
		margin: 10px;
	}
	nav, footer {
		clear: both;
		color: #ffffff;
		backgroung-color: #aeaca8;
		height: 30px;
	}
	nav ul {
		margin: 0px;
		padding: 5px 0px 5px 30px;
	}
	nav li {
		margin-right: 40px;
		display: inline;
	}
	nav li a {
		color: #ffffff;
	}
	nav li a:hover, nav li a current {
		color:#000000;
	}
	section. register {
		width: 100%;
		border-right: 1px solid #eeeeee;
	}
	a {
		color: #de6581;
		text-decoration: none;
	}
	h1, h2, h3{
		font-weight: normal;
	}
	p {
		margin: 0px 10px 15px 10px;
		font-size: 58px;
	}
	footer {
		font-size: 80%;
		padding: 7px 0px 0px 20px;
		background-color: #919191;
		
	}	
</style>
</head>
<body>
	<div class = 'wrapper'>
		<header>
			<p>演唱會訂票系統</p>
			<nav>
				<ul>
					<li><a href = 'home.php' class = 'current'>首頁</a><li>
					<li><a href = 'activity.php'>活動資訊</a><li>
					<li><a href = 'login.php'>會員登入</a><li>
					<li><a href = 'list.php'>訂單查詢</a><li>
					<li><a href = 'about.php'>關於我們</a><li>
				</ul>
			</nav>
		</header>
		<section class = 'register'>
			<?php
			#--連線資料--------------------------------------------------------
				$server = "localhost"; # MySQL/MariaDB 伺服器
				$dbuser = "root"; # 使用者帳號
				$dbpassword = ""; # 使用者密碼

				#--建立連線--------------------------------------------------------
				# 連接 MySQL/MariaDB 資料庫
				$connection = new mysqli($server, $dbuser, $dbpassword);

				# 檢查連線是否成功
				if ($connection->connect_error) {
				  die("連線失敗：" . $connection->connect_error);
				}
				#echo("連線成功!"); 
				#echo "<br>";
				echo "";
				
				#--選擇資料庫--------------------------------------------------------
				$result= mysqli_select_db($connection, '演唱會訂票系統' );
				if (! $result) {
				die ("沒有選擇任何資料庫");
				}
				#echo "資料庫 演唱會訂票系統 已經選擇，可以使用該資料庫了";
				echo "";
				#echo "<br>";
				

				# 得到表單內容 指令
				$account = $_POST['account'];
				$phone = $_POST['phone'];
				$email = $_POST['email'];
				$password = $_POST['password'];
					
				echo "<h1>帳號已申請成功</h1><br>";
				#echo $account;
				echo "<h1>歡迎您的加入</h1><br>";
				echo "<h2>已可開始訂票</h2>";
				# MySQL/MariaDB 指令
				$sqlQuery = "
				INSERT INTO `會員` (`account`, `phone`, `email`, `password`)
				VALUES 
					('$account', '$phone', '$email', '$password')";

				# 執行 MySQL/MariaDB 指令
				if ($connection->query($sqlQuery) == TRUE) {
					#echo "資料新增成功";
					echo '';
				}else {
					echo "資料新增失敗" . $connection->error;
				}
			?>
		<footer>
			版權所有
		</footer>
	</div>		
</body>
</html>