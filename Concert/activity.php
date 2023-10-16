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
					<li><a href = 'register.php'>會員註冊</a><li>
					<li><a href = 'login.php'>會員登入</a><li>
					<li><a href = 'about.php'>關於我們</a><li>
				</ul>
			</nav>
		</header>
		<section class = 'courses'>
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
				echo "";

				#--選擇資料庫--------------------------------------------------------
				$result= mysqli_select_db($connection, '演唱會訂票系統' );
				if (! $result) {
				die ("沒有選擇任何資料庫");
				}
				#echo "資料庫 db7 已經選擇，可以使用該資料庫了";
				echo "";

				#-------------------------------------------------------------------
				#-------------------------------------------------------------------
				# MySQL/MariaDB 查詢資料語法
				$sqlQuery = "SELECT c_name as 演唱會, c_time as 活動日期, singer as 歌手, text as 活動資訊, place as 地點 FROM 演唱會;";

				# 執行 MySQL/MariaDB 查詢並將結果以表格呈現
				if ($result = $connection -> query($sqlQuery)) {
				  # 印出資料的欄位數與資料筆數
				  #printf ("共有 %d 個欄位\n",mysqli_num_fields($result));
				  printf ("共有 %d 場演唱會\n",mysqli_num_rows($result));
				  
				  echo "<TABLE BORDER='1'><TR ALIGN='CENTER'>";
				  
				  # 印出欄位
				  echo "<TR>";    
				  while ($fieldinfo = mysqli_fetch_field($result)) {  
					printf ("<TD>%s</TD>",$fieldinfo -> name);
				  }
				  echo "</TR>";     
				  
				  # 印出資料
				  while ($row = $result->fetch_row()) {
					echo "<TR>";
					for($i=0; $i<mysqli_num_fields($result); $i++){
						echo "<TD>".$row[$i]."</TD>";
					}
					echo "</TR>";  
				  }
				  echo "</TABLE>";
					
				  #釋放查詢結果    
				  $result -> free_result();
				} else {
				  echo "執行失敗：" . $connection->error;
				}

				#-------------------------------------------------------------------
				#-------------------------------------------------------------------
				# 關閉 MySQL/MariaDB 連線
				$connection->close();
			?>
		</section>
		<footer>
			版權所有
		</footer>
	</div>		
</body>
</html>