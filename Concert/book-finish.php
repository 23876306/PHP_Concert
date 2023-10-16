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
	section. courses {
		float: left;
		width: 659px;
		border-right: 1px solid #eeeeee;
	}
	article {
		clear: right;
		overflow: auto;
		width:100%;
	}
	hgroup {
		float:left;
		margin-top:40px;
	}
	figure {
		float; left;
		width: 200px;
		height; 200px;
		padding: 5px;
		margin: 20px;
		border: 1px solid #eeeeee;
	}
	figcaption {
		font-size: 70%;
		text-alian: left;
	}
	aside {
		width: 200px;
		float: right;
		padding: 0px 0px 0px 20px;
	}
	aside section a {
		display: block;
		padding: 10px;
		border-bottom: 1px solid #eeeeee;
	}
	aside section a:hover {
		color: #985d6a;
		backgroung-color: #efefef;
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
	h2 {
		margin: 10px 0px 5px 0px;
	}
	h3 {
		margin: 0px 0px 0px 10px;
		color: #de6581;
	}
	aside h2 {
		padding:30px 0px 10px 0px;
		color: #de6581;
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
					<li><a href = 'book.php'>訂票</a><li>
					<li><a href = 'logout.php'>會員登出</a><li>
					<li><a href = 'about.php'>關於我們</a><li>
				</ul>
			</nav>
		</header>
		<section class = 'courses'>
			<article>
		</section>
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
				
				session_start();
				$account = $_POST['account'];
				$concert = $_SESSION['concert'];
				$seat = $_SESSION['seat'];
				$num = $_SESSION['num'];
				echo "<h1>購票成功</h1><br>";
				# MySQL/MariaDB 指令
				$sqlQuery = "
				INSERT INTO `訂票` (`account`, `concert`, `seat`, `num`)
				VALUES 
				('$account', '$concert', '$seat', '$num')";
				# 執行 MySQL/MariaDB 指令
				if ($connection->query($sqlQuery) == TRUE) {
				  echo "感謝您的支持";
				  echo '<br>會員名稱:	';
				  echo $account;
				  echo '<br> 演唱會名稱:	';
				  echo $concert;
				  echo '<br> 座位區:	';
				  echo $seat;
				  echo '<br>數量:	';
				  echo $num;
				  echo '張<br>';
				} else {
				  echo "資料新增失敗" . $connection->error;
				}				
			?>
			<a href = 'home-login.php'>回到首頁</a>
		<footer>
			版權所有:109021083 109021085 109021088
		</footer>
	</div>		
</body>
</html>
