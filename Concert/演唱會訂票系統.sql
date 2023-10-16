-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-01-08 03:20:36
-- 伺服器版本： 10.4.27-MariaDB
-- PHP 版本： 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `演唱會訂票系統`
--

-- --------------------------------------------------------

--
-- 資料表結構 `座位`
--

CREATE TABLE `座位` (
  `seat` varchar(3) NOT NULL COMMENT '座位區',
  `price` int(5) NOT NULL COMMENT '座位價格',
  `num` int(3) DEFAULT 0 COMMENT '數量'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `座位`
--

INSERT INTO `座位` (`seat`, `price`, `num`) VALUES
('搖滾區', 500, 30),
('普通區', 150, 100);

-- --------------------------------------------------------

--
-- 資料表結構 `會員`
--

CREATE TABLE `會員` (
  `id` int(100) NOT NULL,
  `account` char(10) NOT NULL COMMENT '會員名稱',
  `phone` char(10) NOT NULL COMMENT '會員電話',
  `email` char(50) NOT NULL COMMENT '會員信箱',
  `password` char(10) NOT NULL COMMENT '會員密碼'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `會員`
--

INSERT INTO `會員` (`id`, `account`, `phone`, `email`, `password`) VALUES
(2, '王辣', '0910292466', '23dwdwq@gmail.com', '1132321'),
(4, 'yuu-wei ch', '0933559613', '910826ray@gmail.com', '2y7ebriofh'),
(5, 'wqeqwew', '0933559613', '123333@gmail.com', '2133123'),
(6, '238wqewe', '0933559613', '123333@gmail.com', 'dwqddwqqd'),
(7, 'kukiuykewe', '0933559613', '123333@gmail.com', '32424234'),
(8, 'liyukjywe', '0933559613', '123333@gmail.com', '324324234'),
(9, 'y3y3tt', '0939382931', 'ege3498@gmail.com', '42343242'),
(10, 'pllnmytihn', '0939382931', 'ege3498@gmail.com', 'e23e2e2'),
(11, '21fewadaww', '0939382931', 'ege3498@gmail.com', 'fgergerhjk'),
(12, 'bnjrebr,ls', '0939382931', 'ege3498@gmail.com', 'e21e12e21e'),
(13, '很菇群', '0939312113', 'aojgie432@gmail.com', '3dqee2'),
(15, '111', '13255646', '111@gffwfefw.com', '111');

-- --------------------------------------------------------

--
-- 資料表結構 `演唱會`
--

CREATE TABLE `演唱會` (
  `id` int(100) NOT NULL,
  `c_name` char(20) NOT NULL COMMENT '演唱會名稱',
  `c_time` char(20) NOT NULL COMMENT '演唱會時間',
  `singer` char(10) NOT NULL COMMENT '演唱會歌手',
  `b_time` char(20) NOT NULL COMMENT '售票開始時間',
  `e_time` char(20) NOT NULL COMMENT '售票結束時間',
  `text` char(50) NOT NULL COMMENT '演唱會資訊',
  `place` varchar(10) DEFAULT NULL COMMENT '地點'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `演唱會`
--

INSERT INTO `演唱會` (`id`, `c_name`, `c_time`, `singer`, `b_time`, `e_time`, `text`, `place`) VALUES
(1, '五月天2023諾亞方舟｜10週年進化復刻', '2022/10/10', '五月天', '2022/10/01', '2022/10/09', '五月天演唱會2022-2023｜五月天2023諾亞方舟｜10週年進化復刻限定版演唱會｜桃園國際棒球場', '桃園國際棒球場'),
(2, '盧廣仲 14 週年 勵志的早晨 勵志的夜', '2023/02/28', '盧廣仲', '2023/01/07', '2023/02/24', '盧廣仲 14 週年 勵志的早晨 勵志的夜晚 台北小巨蛋演唱會', ' 台北小巨蛋'),
(3, '周興哲〔Odyssey~旅程〕- 台北小', '2023/01/31', '周興哲', '2023/01/01', '2023/01/15', '周興哲〔Odyssey~旅程〕- 台北小巨蛋 演唱會', '台北小巨蛋'),
(4, '五月天《好好好想見到你》演唱會 台中場', '2023/01/10', '五月天', '2022/11/25', '2023/01/09', '五月天[ 好好好想見到你 ] 演唱會，3個城市15場次', '台中洲際棒球場');

-- --------------------------------------------------------

--
-- 資料表結構 `訂票`
--

CREATE TABLE `訂票` (
  `id` int(100) NOT NULL,
  `account` char(10) NOT NULL COMMENT '	會員名稱	',
  `concert` char(20) NOT NULL COMMENT '演唱會名稱',
  `seat` char(20) NOT NULL COMMENT '座位區',
  `num` int(11) NOT NULL COMMENT '數量',
  `訂單時間` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `訂票`
--

INSERT INTO `訂票` (`id`, `account`, `concert`, `seat`, `num`, `訂單時間`) VALUES
(1, '111', '五月天2023諾亞方舟｜10週年進化復刻', '普通區', 12, '2023-01-07 19:19:10'),
(2, 'wqeqwew', '盧廣仲 14 週年 勵志的早晨 勵志的夜', '普通區', 2, '2023-01-07 19:29:41'),
(3, 'y3y3tt', '周興哲〔Odyssey~旅程', '搖滾區', 78, '2023-01-07 19:38:37'),
(4, 'y3y3tt', '周興哲〔Odyssey~旅程', '搖滾區', 78, '2023-01-07 19:39:11'),
(5, 'y3y3tt', '周興哲〔Odyssey~旅程', '搖滾區', 78, '2023-01-07 19:39:40'),
(6, 'y3y3tt', '周興哲〔Odyssey~旅程', '搖滾區', 78, '2023-01-07 19:40:12');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `座位`
--
ALTER TABLE `座位`
  ADD PRIMARY KEY (`seat`);

--
-- 資料表索引 `會員`
--
ALTER TABLE `會員`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `會員名稱` (`account`);

--
-- 資料表索引 `演唱會`
--
ALTER TABLE `演唱會`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `訂票`
--
ALTER TABLE `訂票`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `會員`
--
ALTER TABLE `會員`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `演唱會`
--
ALTER TABLE `演唱會`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `訂票`
--
ALTER TABLE `訂票`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
