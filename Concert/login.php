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
					<li><a href = 'register.php'>會員註冊</a><li>
					<li><a href = 'list.php'>訂單查詢</a><li>
					<li><a href = 'about.php'>關於我們</a><li>
				</ul>
			</nav>
		</header>
		<section class = 'register'>
			<form method="POST" action="login-run.php">
			<table border="1" cellspacing="1" cellpadding="3">
            <tr>
                <th>會員名稱</th><td><input type="text" name="account" placeholder="帳號"></td>
            </tr>
            <tr>
                <th>會員密碼</th><td><input type="password" name="password" placeholder="密碼"></td>
            </tr>
            <tr>
                <th colspan="2" align="center">
                <input type="submit" name="submit" value="登入">
                <input type="reset" name="reset" value="重設"></th>
			</tr>
			</form>
	</div>		
</body>
</html>