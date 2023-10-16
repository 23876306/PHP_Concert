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
		<section class = 'register'>
		</section>
			<?php
				session_start();
				require_once 'config.php';

				$account = $_POST['account'];
				$password = $_POST['password'];

				//如果使用者名稱和密碼都不為空
				if($account && $password){
					//檢測資料庫是否有對應的username和password的sql
					$sql = "SELECT * FROM 會員 WHERE account ='$account' and password = '$password'";
					
					//執行sql
					$result = mysqli_query($link, $sql);
					
					//返回一個數值
					$rows=mysqli_num_rows($result);  

					//0 false 1 true
					if($rows){

						//如果密碼以及帳號一樣，顯示登入成功
						$_SESSION['is_login'] = TRUE;

						//使用PHP來轉址，前往後台
						header('Location: home-login.php');

					}else{

						//要不然就是登入失敗
						$_SESSION['is_login'] = FALSE;

						//在session 存一個 msg 變數
						$_SESSION['msg'] = '登入失敗，請確認帳號密碼!!';

						header('Location: login.php');
					}
					
				}else{
				
				$_SESSION['msg'] = '請輸入帳號或密碼!!';
				//使用 PHP header 來轉址 返回登入頁
				header('Location:login.php');
				}
			?>
	</div>		
</body>
</html>