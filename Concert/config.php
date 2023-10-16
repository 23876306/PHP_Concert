<?php
    $host = 'localhost';

    $dbuser = 'root';

    $dbpw = '';

    $dbname = '演唱會訂票系統';

    $link = mysqli_connect($host, $dbuser, $dbpw, $dbname);

    if($link){
        mysqli_query($link,"SET NAMES utf8");
    }else{
        echo '無法連線資料庫 :<br/>' .mysqli_connect_error();
    }
?>