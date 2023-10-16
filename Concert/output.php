<?php
	#--連線資料--------------------------------------------------------
	$server = "localhost"; # MySQL/MariaDB 伺服器
	$dbuser = "root"; # 使用者帳號
	$dbpassword = ""; # 使用者密碼

	#--建立連線--------------------------------------------------------
	# 連接 MySQL/MariaDB 資料庫
	$conn = new mysqli($server, $dbuser, $dbpassword);

	# 檢查連線是否成功
	if ($conn->connect_error) {
		die("連線失敗：" . $conn->connect_error);
	}
	#echo("連線成功!"); 
	#echo "<br>";
	echo "";
				
	#--選擇資料庫--------------------------------------------------------
	$result= mysqli_select_db($conn, '演唱會訂票系統' );
	if (! $result) {
		die ("沒有選擇任何資料庫");
	}
	#echo "資料庫 db7 已經選擇，可以使用該資料庫了";
	echo ""	;
		$sql = "SELECT  `c_name` FROM `演唱會` WHERE 1;";
		$car_brands = mysqli_query ($conn, $sql);
?>
<html>
    <head>
    <title>Dynamic Drop Down Box</title>
    </head>
        <form method="POST" name="form"  action="output2.php">
            演唱會:
            <select c_name = 'NEW'>
            <option value="">--- Select ---</option>
		<?php
            while ($cat = mysqli_fetch_array(
                               $car_brands,MYSQLI_ASSOC)):;

                ?>
                    <option value="<?php echo $cat['c_name'];
                    ?>">
                               <?php echo $cat['c_name'];?>
                    </option>
                <?php
              endwhile;
                ?>
            </select>
            <input type="submit" name="Submit" value="Select" />
        </form>
</html>