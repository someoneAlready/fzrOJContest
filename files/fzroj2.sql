-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 05 月 03 日 23:50
-- 服务器版本: 5.5.37
-- PHP 版本: 5.3.10-1ubuntu3.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `fzroj2`
--

-- --------------------------------------------------------

--
-- 表的结构 `belong`
--

CREATE TABLE IF NOT EXISTS `belong` (
  `pid` int(11) NOT NULL DEFAULT '0',
  `tid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pid`,`tid`),
  KEY `tid` (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `code`
--

CREATE TABLE IF NOT EXISTS `code` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `ctext` text,
  `clang` varchar(255) DEFAULT NULL,
  `cstatus` int(11) NOT NULL DEFAULT '0',
  `ctime` int(11) DEFAULT NULL,
  `cmem` int(11) DEFAULT NULL,
  `cdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cid`),
  KEY `pid` (`pid`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `problem`
--

CREATE TABLE IF NOT EXISTS `problem` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(255) DEFAULT NULL,
  `ptime` int(11) DEFAULT NULL,
  `pmem` int(11) DEFAULT NULL,
  `ptext` text,
  `psource` text,
  `pdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1007 ;

--
-- 转存表中的数据 `problem`
--

INSERT INTO `problem` (`pid`, `pname`, `ptime`, `pmem`, `ptext`, `psource`, `pdate`) VALUES
(1001, 'ç”»ç›´çº¿', 1, 64, '<desp>é¹é¹æœ€è¿‘è¿·æ‹ä¸Šäº†ç”»ç›´çº¿ã€‚å¹³é¢ä¸Šæœ‰N^2ä¸ªç‚¹ï¼ˆNè¡Œæ¯è¡ŒNä¸ªï¼‰ï¼Œä»»å–ä¸¤ç‚¹å¯ä»¥ç”»ä¸€æ¡ç›´çº¿ï¼Œé¹é¹å·¦æ‰‹ç”»ä¸€æ ¹ï¼Œå³æ‰‹ç”»ä¸€æ ¹ä¹æ­¤ä¸ç–²çš„çŽ©ç€ã€‚<br/>\r\nè¿‡äº†å¥½ä¹…ï¼Œé¹é¹æ„Ÿè§‰è¿™æ ·æ— èŠäº†ã€‚äºŽæ˜¯ï¼Œä»–æƒ³çŸ¥é“ä»–ä¸€å…±å¯ä»¥ç”»å¤šå°‘æ¡ä¸å¹³è¡Œçš„ç›´çº¿ã€‚</desp>\r\n<input>ç¬¬ä¸€è¡Œä¸€ä¸ªæ•´æ•°T(T&lt;=1000)ï¼Œæµ‹è¯•çš„ç»„æ•°ã€‚<br/>\r\næŽ¥ä¸‹æ¥Tè¡Œæ¯è¡Œä¸€ä¸ªæ•´æ•°N(1&lt;N&lt;=1000)ï¼Œè¡¨ç¤ºé¹é¹ç”»çº¿çš„èŒƒå›´ã€‚</input>\r\n<output>æ¯è¡Œå¯¹åº”è¾“å‡ºé¹é¹æ‰€èƒ½ç”»çº¿çš„æ€»æ•°</output>\r\n<sinput>2\r\n2\r\n3</sinput>\r\n<soutput>4\r\n8</soutput>\r\n', 'ACM/ICPC Team of Zhengzhou University', '2014-05-03 15:13:11'),
(1002, 'ç”µè·¯å®žéªŒ', 1, 64, '<desp>å°æ˜Žæœ€è¿‘åœ¨åšç”µè·¯å®žéªŒçš„æ—¶å€™æƒ³åˆ°äº†ä¸€ä¸ªæœ‰è¶£çš„ç‚¹å­ï¼Œä»–å‡†å¤‡è®¾è®¡ä¸€ä¸ªè¿™æ ·çš„ç”µè·¯ã€‚è¿™ä¸ªç”µè·¯ä¸Šé¢æœ‰å¾ˆå¤šç¯æ³¡ï¼ˆä¼šå‘å‡ºçº¢å…‰æˆ–è“å…‰ï¼‰ï¼Œç¯æ³¡ä¹‹é—´ç”¨ç”µçº¿è¿žæŽ¥ï¼Œç„¶åŽåœ¨å…¶ä¸­ä¸€ä¸ªç¯æ³¡ä¸ŠæŽ¥ä¸Šå¼€å…³ï¼Œ<br/>\r\nç”µçº¿é—´ä¸ä»…èƒ½å¯¼ç”µè€Œä¸”è¿˜å¸¦æœ‰ä¿¡å·ï¼ˆ0æˆ–1ä¿¡å·ï¼‰ï¼Œä¿¡å·æ˜¯è¿™æ ·äº§ç”Ÿå’Œä½œç”¨çš„ï¼šè‹¥ä¸€ä¸ªç¯æ³¡å‘çº¢å…‰ï¼Œåˆ™å®ƒä¼šå‘å‡º0ä¿¡å·ï¼Œå¦ä¸€ä¸ªä¸Žä¹‹ç›¸è¿žçš„ç¯æ³¡æ”¶åˆ°åŽï¼Œå‘è“å…‰ï¼Œä¸”å‘å‡º1ä¿¡å·ï¼Œåä¹‹äº¦ç„¶ã€‚<br/><br/>\r\n\r\nå°æ˜Žå¸Œæœ›æ‰“å¼€å¼€å…³åŽï¼Œç¯æ³¡èƒ½å…¨éƒ¨ç‚¹äº®ï¼Œä½†è¿™æ—¶å€™ä»–å‘çŽ°ä»–è®¾è®¡çš„ç”µè·¯å›¾å‡ºçŽ°äº†é—®é¢˜ï¼Œå³ä¸€ä¸ªç¯æ³¡æŽ¥å—ä¸¤ç§ä¸åŒçš„ä¿¡å·æ—¶ä¸ä¼šå‘å…‰ã€‚å°æ˜ŽçŽ°åœ¨å‡†å¤‡åˆ é™¤ä¸€äº›ç”µçº¿ï¼Œä½¿å¾—è¿™ä¸ªå®žéªŒèƒ½å¤ŸæˆåŠŸ<br/>\r\nï¼ˆç¯æ³¡å…¨äº®ï¼‰ï¼Œä¸”ç”±äºŽç»è´¹é—®é¢˜ï¼Œä»–å¸Œæœ›åˆ é™¤çš„ç”µçº¿çš„é•¿åº¦å’Œæœ€å¤§ã€‚ç”±äºŽç”µè·¯å›¾è¿‡äºŽç¹æ‚ï¼Œä»–æ‰¾åˆ°äº†èªæ˜Žçš„ä½ ï¼Œå¸Œæœ›ä½ èƒ½å¸®ä»–è§£å†³è¿™ä¸ªé—®é¢˜ã€‚\r\nè¯·æ³¨æ„ï¼š<br/>\r\n1.åªæœ‰ä¸€ä¸ªå¼€å…³ï¼Œä¸”å¼€å…³åªä¸Žä¸€ä¸ªç¯æ³¡ç›¸è¿žã€‚<br/>\r\n2.æ‰“å¼€å¼€å…³ï¼Œå¼€å…³å‘å‡º0ä¿¡å·ã€‚</desp>\r\n<input>æ³¨æ„ï¼šæµ‹è¯•æ•°æ®æœ‰å¤šç»„<br/>\r\nç¬¬ä¸€è¡Œæœ‰ä¸¤ä¸ªæ•´æ•°nï¼Œm,ä»£è¡¨æœ‰ä¸ªç¯æ³¡,mæ¡ç”µçº¿ã€‚å…¶ä¸­å¼€å…³ç”¨0è¡¨ç¤ºï¼Œç¯æ³¡ç”¨1 ~ n è¡¨ç¤ºã€‚ (0&lt;n&lt;=100,0&lt;m&lt;=5000)<br/>\r\næŽ¥ä¸‹æ¥mè¡Œï¼Œæ¯è¡Œæœ‰ä¸‰ä¸ªæ•´æ•°ï¼Œu,v,l,è¡¨ç¤ºu , væœ‰ç”µçº¿è¿žæŽ¥ï¼Œç”µçº¿é•¿åº¦ä¸ºl.<br/>\r\n(è¾“å…¥ä¿è¯ä¸¤ç‚¹é—´æœ€å¤šæœ‰ä¸€æ¡ç”µçº¿ï¼Œä¸€ä¸ªç‚¹ä¸ä¼šä¸Žè‡ªå·±ç›¸è¿žã€‚)<br/>\r\nï¼ˆè¾“å…¥æ•°æ®ä¿è¯ä¸€å®šæœ‰è§£ã€‚ï¼‰</input>\r\n<output>è¾“å‡ºä¸€ä¸ªå€¼Wï¼Œè¡¨ç¤ºå½“å®žéªŒèƒ½æˆåŠŸæ—¶ï¼Œå¯åˆ é™¤çš„æœ€å¤§ç”µè·¯é•¿åº¦å’Œã€‚</output>\r\n<sinput>2 2\r\n0 1 3    \r\n2 1 2</sinput>\r\n<soutput>0</soutput>\r\n', 'ACM/ICPC Team of Zhengzhou University', '2014-05-03 15:15:27'),
(1003, 'ColorfulRoad', 1, 64, '<desp>æœ‰ä¸€æ¡é•¿åº¦ä¸ºNçš„é“è·¯ï¼Œå¯ä»¥çœ‹æˆæ˜¯Nä¸ªèŠ‚ç‚¹è‡ªå·¦å‘å³ä¾æ¬¡è¿žæŽ¥ï¼ˆä¾‹å¦‚N=3ï¼š 0-1-2ï¼‰ï¼Œæ¯ä¸ªèŠ‚ç‚¹ä¸Šéƒ½æœ‰ä¸€ç§é¢œè‰²ï¼š<br/>\r\nè“è‰² æˆ– çº¢è‰² æˆ– ç»¿è‰²ï¼Œåˆ†åˆ«ç”¨B,R,Gè¡¨ç¤ºã€‚<br/><br/>\r\n\r\nçŽ°åœ¨Bobåœ¨0èŠ‚ç‚¹ï¼Œä»–è¦åŽ»å¾€N-1èŠ‚ç‚¹ã€‚åœ¨è¡Œèµ°çš„è¿‡ç¨‹ä¸­éœ€è¦æ»¡è¶³ä¸€äº›è§„åˆ™ï¼š1ï¼šåªèƒ½å‘å³èµ°ã€‚2ï¼šèµ°å‡ºæ¥çš„è·¯çº¿é¢œè‰²é¡ºåºå¿…é¡»æ˜¯ çº¢ï¼ˆRï¼‰ï¼Œç»¿ï¼ˆGï¼‰ï¼Œè“ï¼ˆBï¼‰ï¼Œçº¢ï¼ˆRï¼‰ï¼Œç»¿ï¼ˆGï¼‰ï¼Œè“ï¼ˆBï¼‰,çº¢ï¼ˆRï¼‰....<br/>\r\n3ï¼š ä»–ä¸€æ¬¡å¯ä»¥èµ°jä¸ªèŠ‚ç‚¹ï¼ˆåªè¦ä¸è¶…è¿‡N-1èŠ‚ç‚¹ï¼Œjå¯ä»¥å–ä»»æ„å€¼ï¼‰ï¼Œä¼šæ¶ˆè€— j*j çš„ä½“åŠ›ã€‚<br/>\r\nè¯·ä½ è®¡ç®—Bobä»Ž0èµ°åˆ°N-1æ»¡è¶³ä¸Šè¿°è§„åˆ™éœ€è¦çš„æœ€å°ä½“åŠ›ã€‚</desp>\r\n<input>ç¬¬ä¸€è¡Œæœ‰ä¸€ä¸ªæ•´æ•°T(T&lt;=20)ï¼Œä»£è¡¨Tæµ‹è¯•ã€‚æŽ¥ä¸‹æ¥æœ‰Tè¡Œï¼Œæ¯è¡Œæœ‰ä¸€ä¸ªå­—ç¬¦ä¸²sï¼Œä»£è¡¨é•¿åº¦ä¸ºstrlen(s)çš„è·¯å¾„ã€‚(å­—ç¬¦ä¸²é•¿åº¦&lt;=500)</input>\r\n<output>æ¯è¡Œè¾“å‡ºä¸€ä¸ªæ•´æ•°ï¼Œä»£è¡¨è¾¾åˆ°N-1æ—¶ï¼Œæ¶ˆè€—çš„æœ€å°ä½“åŠ›ï¼Œè‹¥ä¸èƒ½åˆ°è¾¾N-1ï¼Œè¾“å‡º-1.</output>\r\n<sinput>2\r\nRGGGB\r\nRBBGGGRR</sinput>\r\n<soutput>8\r\n-1\r\n</soutput>\r\n', 'ACM/ICPC Team of Zhengzhou University', '2014-05-03 15:17:06'),
(1004, 'ä¿„ç½—æ–¯æ–¹å—', 1, 64, '<desp>ä¿„ç½—æ–¯æ–¹å—æ˜¯å‰è‹è”ç§‘å­¦å®¶é˜¿åˆ—å…‹è°¢Â·å¸•åŸºç‰¹è¯ºå¤«åœ¨1984å¹´6æœˆåˆ©ç”¨ç©ºé—²æ—¶é—´æ‰€ç¼–å†™çš„æ¸¸æˆç¨‹åºã€‚<br/><br/>\r\n\r\nä¸ºäº†é™ä½Žæ¸¸æˆçš„éš¾åº¦ï¼ŒcgangeeæŠŠè§„åˆ™æ”¹ä¸ºï¼Œå½“ä¸€è¡Œè¢«ç§¯æœ¨å¡«æ»¡æ—¶ï¼Œè¯¥è¡Œä¸ä¼šè¢«æ¸…ç©ºã€‚è€Œä¸”æŠŠåŽŸæ¥çš„å››æ ¼éª¨ç‰Œæ”¹ä¸ºä¸‹é¢çš„ä¸‰æ ¼éª¨ç‰Œã€‚<br/><br/>\r\n\r\n<img src="http://acm.zzu.edu.cn/gao.jpg" />\r\n<br/><br/>\r\nåœ¨ä¸€ä¸ªå®½åº¦ä¸º6ï¼Œé«˜åº¦ä¸º1000çš„ç«–ç›´æ¸¸æˆåŒºåŸŸï¼Œç»™ä½ ç»™ä½ nï¼ˆ1&lt;=n&lt;=10ï¼‰ä¸ªç§¯æœ¨ï¼Œä»–ä»¬æŒ‰ç…§ç»™å®šçš„é¡ºåºä¾æ¬¡è½ä¸‹ï¼Œåªæœ‰åœ¨å½“å‰è¿™ä¸ªç§¯æœ¨åˆ°è¾¾åœ°é¢æ—¶ï¼Œä¸‹ä¸€ä¸ªç§¯æœ¨æ‰ä»Žä¸Šæ–¹è½ä¸‹ã€‚<br/>\r\nçŽ°åœ¨cgangeeé‚€è¯·ä½ æ¥çŽ©è¿™ä¸ªæ¸¸æˆï¼Œä½ å¯ä»¥å·¦å³ç§»åŠ¨ï¼ˆæ³¨æ„ï¼ä¸å¯ä»¥æ—‹è½¬ï¼‰è¿™äº›ç§¯æœ¨ï¼Œä½¿å¾—æ‰€æœ‰ç§¯æœ¨éƒ½è½ä¸‹æ—¶ï¼Œç§¯æœ¨ç´¯ç§¯çš„é«˜åº¦æœ€ä½Žã€‚</desp>\r\n<input>ç¬¬ä¸€è¡Œä¸ºä¸€ä¸ªæ•´æ•°Tï¼ˆ1&lt;=T&lt;=5)è¡¨ç¤ºæµ‹è¯•æ•°æ®çš„ç»„æ•°ã€‚\r\n\r\næ¯ç»„æµ‹è¯•æ•°æ®:\r\n&nbsp;&nbsp;&nbsp;	ç¬¬1è¡Œ: ä¸€ä¸ªæ•´æ•°nï¼Œè¡¨ç¤ºæœ‰nç§¯æœ¨ä¾æ¬¡è½ä¸‹ã€‚\r\n&nbsp;&nbsp;&nbsp;	ç¬¬2è¡Œ: nä¸ªç”¨ç©ºæ ¼éš”å¼€çš„æ•°å­—aiï¼Œè¡¨ç¤ºä¾æ¬¡è½ä¸‹çš„ç§¯æœ¨ï¼Œaiè¡¨ç¤ºç¬¬iä¸ªè½ä¸‹æ¥çš„ç§¯æœ¨çš„ç§ç±»ã€‚</input>\r\n<output>å¯¹ä¸Žæ¯ç»„æ•°æ®ï¼Œè¾“å‡ºä¸€ä¸ªæ•´æ•°åˆ°ä¸€è¡Œï¼Œè¡¨ç¤ºç§¯æœ¨æ‰€ç´¯ç§¯æœ€ä½Žé«˜åº¦ã€‚</output>\r\n<sinput>2\r\n7\r\n3 4 5 6 2 2 2\r\n6\r\n1 1 1 2 2 2</sinput>\r\n<soutput>4\r\n3</soutput>\r\n', 'ACM/ICPC Team of Zhengzhou University', '2014-05-03 15:19:51'),
(1005, 'Stars in Your Window', 1, 64, '<desp>                                     Stars in Your Window\r\nFleeting time does not blur my memory of you. Can it really be 4 years since I first saw you? I still remember, vividly, on the beautiful Zhuhai Campus, 4 years ago, from the moment I saw you smile, as you were walking out of the classroom and turned your head back, with the soft sunset glow shining on your rosy cheek, I knew, I knew that I was already drunk on you. Then, after several monthsâ€™ observation and prying, your grace and your wisdom, your attitude to life and your aspiration for future were all strongly impressed on my memory. You were the glamorous and sunny girl whom I always dream of to share the rest of my life with. Alas, actually you were far beyond my wildest dreams and I had no idea about how to bridge that gulf between you and me. So I schemed nothing but to wait, to wait for an appropriate opportunity. Till now â€” the arrival of graduation, I realize I am such an idiot that one should create the opportunity and seize it instead of just waiting. <br/><br/>\r\n\r\nThese days, having parted with friends, roommates and classmates one after another, I still cannot believe the fact that after waving hands, these familiar faces will soon vanish from our life and become no more than a memory. I will move out from school tomorrow. And you are planning to fly far far away, to pursue your future and fulfill your dreams. Perhaps we will not meet each other any more if without fate and luck. So tonight, I was wandering around your dormitory building hoping to meet you there by chance. But contradictorily, your appearance must quicken my heartbeat and my clumsy tongue might be not able to belch out a word. I cannot remember how many times I have passed your dormitory building both in Zhuhai and Guangzhou, and each time aspired to see you appear in the balcony or your silhouette that cast on the window. I cannot remember how many times this idea comes to my mind: call her out to have dinner or at least a conversation. But each time, thinking of your excellence and my commonness, the predominance of timidity over courage drove me leave silently.  <br/><br/>\r\n\r\nGraduation, means the end of life in university, the end of these glorious, romantic years. Your lovely smile which is my original incentive to work hard and this unrequited love will be both sealed as a memory in the deep of my heart and my mind. Graduation, also means a start of new life, a footprint on the way to bright prospect. I truly hope you will be happy everyday abroad and everything goes well. Meanwhile, I will try to get out from puerility and become more sophisticated. To pursue my own love and happiness here in reality will be my ideal I never desert.  <br/><br/>\r\n\r\nFarewell, my princess! \r\n <br/><br/>\r\nIf someday, somewhere, we have a chance to gather, even as gray-haired man and woman, at that time, I hope we can be good friends to share this memory proudly to relight the youthful and joyful emotions. If this chance never comes, I wish I were the stars in the sky and twinkling in your window, to bless you far away, as friends, to accompany you every night, sharing the sweet dreams or going through the nightmares together.  <br/><br/>\r\n\r\nHere comes the problem:Assume the sky is a flat plane.All the stars lie on it with a location(x,y).for each star,there is a grade ranging form 1 to 100,representing its brightness,where 100 is brightest and 1 is the weakest.The window is a rectangle whose edges are parallel to the x-axis or y-axis.When give the position of the window,you should return the sum grade about the star in the window.(It contains the star in the edge of the windon).</desp>\r\n<input>There are several test cases in the input.<br/><br/>\r\nThe first line of each case contains 3 integers:n,x1,y1,x2,y2, indicating the number of stars,the lower left corner coordinates and the upper right corner coordinate of the rectangle-shaped window.(1&lt;=n&lt;=100; 1&lt;=x1,x2,y1,y2&lt;=100),x2&gt;x1,y2&gt;y1)<br/><br/>\r\nThen n lines follow,with 3 integers each:x,y,c,telling the location (x,y) and the brightness of each star.(1&lt;=x,y&lt;=100,1&lt;=c&lt;=100).</input>\r\n<output>For each test case,output the sum brightness in the rectangle-shaped window.</output>\r\n<sinput>3 0 0 5 5\r\n0 1 10\r\n0 0 10\r\n3 3 5\r\n\r\n1 0 0 5 5\r\n100 100 1</sinput>\r\n<soutput>25\r\n\r\n0</soutput>\r\n', 'ACM/ICPC Team of Zhengzhou University', '2014-05-03 15:23:30'),
(1006, 'é«˜æ•ˆå¹‚', 1, 64, '<desp>è®¡ç®—n15çš„æœ€å¤©çœŸçš„æ–¹å¼ï¼Œéœ€è¦14æ¬¡ä¹˜æ³•ï¼š<br/>\r\n\r\nn Ã— n Ã— ... Ã— n = n15<br/><br/>\r\n\r\nä½†ä½¿ç”¨â€œäºŒè¿›åˆ¶â€çš„æ–¹æ³•å¯ä»¥ç”¨å…­æ¬¡ä¹˜æ³•è®¡ç®—å®ƒï¼š<br/>\r\n\r\nn Ã— n = n2\r\n<br/>\r\nn2 Ã— n2 = n4<br/>\r\n\r\nn4 Ã— n4 = n8<br/>\r\n\r\nn8 Ã— n4 = n12<br/>\r\n\r\nn12 Ã— n2 = n14\r\n<br/>\r\nn14 Ã— n = n15<br/><br/>\r\n\r\nç„¶è€Œï¼Œä»ç„¶å¯èƒ½åªç”¨äº”æ¬¡ä¹˜æ³•è®¡ç®—å®ƒï¼š<br/>\r\n\r\nn Ã— n = n2<br/>\r\n\r\nn2 Ã— n = n3<br/>\r\n\r\nn3 Ã— n3 = n6<br/>\r\n\r\nn6 Ã— n6 = n12<br/>\r\n\r\nn12 Ã— n3 = n15<br/><br/>\r\n\r\næˆ‘ä»¬å°†m(k)å®šä¹‰ä¸ºè®¡ç®—nkæœ€å°‘ä¹˜æ³•æ¬¡æ•°ï¼Œä¾‹å¦‚m(15) = 5ã€‚</desp>\r\n<input>å¤šç»„è¾“å…¥ã€‚<br/><br/>\r\n\r\næ¯ç»„ä¸€è¡Œï¼Œè¾“å…¥ä¸€ä¸ªkï¼Œ1&lt;k&lt;200ã€‚</input>\r\n<output>è¾“å‡ºm(k)</output>\r\n<sinput>2\r\n15</sinput>\r\n<soutput>1\r\n5</soutput>\r\n', 'ACM/ICPC Team of Zhengzhou University', '2014-05-03 15:48:19');

-- --------------------------------------------------------

--
-- 表的结构 `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `tbegin` datetime DEFAULT NULL,
  `tlength` time DEFAULT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) DEFAULT NULL,
  `upwd` varchar(255) DEFAULT NULL,
  `uemail` varchar(255) DEFAULT NULL,
  `umotto` varchar(255) DEFAULT NULL,
  `uadmin` int(11) DEFAULT '0',
  `udate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=81 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`uid`, `uname`, `upwd`, `uemail`, `umotto`, `uadmin`, `udate`) VALUES
(1, '20122430231', 'nLBmBCAz', NULL, NULL, 0, '2014-05-03 12:50:37'),
(2, '20132480129', 'wkhDqCXj', NULL, NULL, 0, '2014-05-03 12:50:37'),
(3, '20132480213', 'oFxjBDEs', NULL, NULL, 0, '2014-05-03 12:50:37'),
(4, '20132430208', 'rbnCyGXK', NULL, NULL, 0, '2014-05-03 12:50:37'),
(5, '20122430205', 'OELMAQwh', NULL, NULL, 0, '2014-05-03 12:50:37'),
(6, '20122430139', 'pmoHWkeh', NULL, NULL, 0, '2014-05-03 12:50:37'),
(7, '20132480113', 'qGbqLjvw', NULL, NULL, 0, '2014-05-03 12:50:37'),
(8, '20132480219', 'dQBIMTRL', NULL, NULL, 0, '2014-05-03 12:50:37'),
(9, '20132480218', 'PnNWQjAA', NULL, NULL, 0, '2014-05-03 12:50:37'),
(10, '20113410127', 'RwOSCUQF', NULL, NULL, 0, '2014-05-03 12:50:37'),
(11, '20132430109', 'baxpcchH', NULL, NULL, 0, '2014-05-03 12:50:37'),
(12, '20122430136', 'VrMnZKQX', NULL, NULL, 0, '2014-05-03 12:50:37'),
(13, '20132430126', 'JkTYaBhi', NULL, NULL, 0, '2014-05-03 12:50:37'),
(14, '20112480129', 'qoNtMGWW', NULL, NULL, 0, '2014-05-03 12:50:37'),
(15, '20122430134', 'cPivuTlG', NULL, NULL, 0, '2014-05-03 12:50:37'),
(16, '20132480109', 'eHaihRtK', NULL, NULL, 0, '2014-05-03 12:50:37'),
(17, '20112480203', 'wsSqqSog', NULL, NULL, 0, '2014-05-03 12:50:37'),
(18, '20112480204', 'WnQNldWB', NULL, NULL, 0, '2014-05-03 12:50:37'),
(19, '20122430137', 'rBnAeguo', NULL, NULL, 0, '2014-05-03 12:50:37'),
(20, '20132480106', 'CrbtkXoC', NULL, NULL, 0, '2014-05-03 12:50:37'),
(21, '20132480104', 'WvXRrXMd', NULL, NULL, 0, '2014-05-03 12:50:37'),
(22, '20132430221', 'tkaMEukc', NULL, NULL, 0, '2014-05-03 12:50:38'),
(23, '20122480239', 'BUuEmyTr', NULL, NULL, 0, '2014-05-03 12:50:38'),
(24, '20122430211', 'YiJlGifZ', NULL, NULL, 0, '2014-05-03 12:50:38'),
(25, '20112430223', 'LIjUsyYa', NULL, NULL, 0, '2014-05-03 12:50:38'),
(26, '20122480204', 'UyiutHri', NULL, NULL, 0, '2014-05-03 12:50:38'),
(27, '20122430215', 'fKgKbPZz', NULL, NULL, 0, '2014-05-03 12:50:38'),
(28, '20122480207', 'CalDyGuW', NULL, NULL, 0, '2014-05-03 12:50:38'),
(29, '20113410133', 'goOPlQWh', NULL, NULL, 0, '2014-05-03 12:50:38'),
(30, '20122430209', 'PndHCvDX', NULL, NULL, 0, '2014-05-03 12:50:38'),
(31, '20132480221', 'bYPhUnps', NULL, NULL, 0, '2014-05-03 12:50:38'),
(32, '20122430212', 'DixMFXCU', NULL, NULL, 0, '2014-05-03 12:50:38'),
(33, '20112430226', 'juIybwiy', NULL, NULL, 0, '2014-05-03 12:50:38'),
(34, '20113410222', 'yYyzvPVe', NULL, NULL, 0, '2014-05-03 12:50:38'),
(35, '20132480217', 'EeCUtXIt', NULL, NULL, 0, '2014-05-03 12:50:38'),
(36, '20120220405', 'giEkHDlL', NULL, NULL, 0, '2014-05-03 12:50:38'),
(37, '20130240118', 'jFXtrVSk', NULL, NULL, 0, '2014-05-03 12:50:38'),
(38, '20122430228', 'hEBpQPDu', NULL, NULL, 0, '2014-05-03 12:50:38'),
(39, '20127610835', 'TbcIRXUJ', NULL, NULL, 0, '2014-05-03 12:50:38'),
(40, '20132430101', 'DteQdaJw', NULL, NULL, 0, '2014-05-03 12:50:38'),
(41, '20132430232', 'yUwWJyEL', NULL, NULL, 0, '2014-05-03 12:50:38'),
(42, '20132430235', 'xPpwQDUd', NULL, NULL, 0, '2014-05-03 12:50:38'),
(43, '20132480220', 'Bvfppwzf', NULL, NULL, 0, '2014-05-03 12:50:38'),
(44, '20132430123', 'OYdYVUCm', NULL, NULL, 0, '2014-05-03 12:50:38'),
(45, '20112480202', 'YGDVnNel', NULL, NULL, 0, '2014-05-03 12:50:38'),
(46, '20112480214', 'PwiPXZKh', NULL, NULL, 0, '2014-05-03 12:50:38'),
(47, '20112430205', 'WpNtfRCd', NULL, NULL, 0, '2014-05-03 12:50:38'),
(48, '20122430245', 'OovgRwSm', NULL, NULL, 0, '2014-05-03 12:50:38'),
(49, '20112480145', 'xqRorhlO', NULL, NULL, 0, '2014-05-03 12:50:39'),
(50, '20132470205', 'mAkcnEhv', NULL, NULL, 0, '2014-05-03 12:50:39'),
(51, '20112430204', 'yQXLnnFZ', NULL, NULL, 0, '2014-05-03 12:50:39'),
(52, '20127610758', 'HajugfUU', NULL, NULL, 0, '2014-05-03 12:50:39'),
(53, '20112480110', 'PiuFqJvQ', NULL, NULL, 0, '2014-05-03 12:50:39'),
(54, '20127610756', 'OXVwTSeG', NULL, NULL, 0, '2014-05-03 12:50:39'),
(55, '20132480216', 'BKLGIBCi', NULL, NULL, 0, '2014-05-03 12:50:39'),
(56, '20127610641', 'IpYKrFSv', NULL, NULL, 0, '2014-05-03 12:50:39'),
(57, '20127610730', 'CTwttMnp', NULL, NULL, 0, '2014-05-03 12:50:39'),
(58, '20127610712', 'CguUUloI', NULL, NULL, 0, '2014-05-03 12:50:39'),
(59, '20132430227', 'nKESbXap', NULL, NULL, 0, '2014-05-03 12:50:39'),
(60, 'team0', 'nLBmBCAz', NULL, NULL, 0, '2014-05-03 12:50:39'),
(61, 'team1', 'wkhDqCXj', NULL, NULL, 0, '2014-05-03 12:50:39'),
(62, 'team2', 'oFxjBDEs', NULL, NULL, 0, '2014-05-03 12:50:39'),
(63, 'team3', 'rbnCyGXK', NULL, NULL, 0, '2014-05-03 12:50:39'),
(64, 'team4', 'OELMAQwh', NULL, NULL, 0, '2014-05-03 12:50:39'),
(65, 'team5', 'pmoHWkeh', NULL, NULL, 0, '2014-05-03 12:50:39'),
(66, 'team6', 'qGbqLjvw', NULL, NULL, 0, '2014-05-03 12:50:39'),
(67, 'team7', 'dQBIMTRL', NULL, NULL, 0, '2014-05-03 12:50:39'),
(68, 'team8', 'PnNWQjAA', NULL, NULL, 0, '2014-05-03 12:50:39'),
(69, 'team9', 'RwOSCUQF', NULL, NULL, 0, '2014-05-03 12:50:39'),
(70, 'team10', 'baxpcchH', NULL, NULL, 0, '2014-05-03 12:50:39'),
(71, 'team11', 'VrMnZKQX', NULL, NULL, 0, '2014-05-03 12:50:39'),
(72, 'team12', 'JkTYaBhi', NULL, NULL, 0, '2014-05-03 12:50:39'),
(73, 'team13', 'qoNtMGWW', NULL, NULL, 0, '2014-05-03 12:50:39'),
(74, 'team14', 'cPivuTlG', NULL, NULL, 0, '2014-05-03 12:50:39'),
(75, 'team15', 'eHaihRtK', NULL, NULL, 0, '2014-05-03 12:50:39'),
(76, 'team16', 'wsSqqSog', NULL, NULL, 0, '2014-05-03 12:50:39'),
(77, 'team17', 'WnQNldWB', NULL, NULL, 0, '2014-05-03 12:50:40'),
(78, 'team18', 'rBnAeguo', NULL, NULL, 0, '2014-05-03 12:50:40'),
(79, 'team19', 'CrbtkXoC', NULL, NULL, 0, '2014-05-03 12:50:40'),
(80, 'cgangee', 'chengang', NULL, NULL, 1, '2014-05-03 12:51:31');

--
-- 限制导出的表
--

--
-- 限制表 `belong`
--
ALTER TABLE `belong`
  ADD CONSTRAINT `belong_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `problem` (`pid`),
  ADD CONSTRAINT `belong_ibfk_2` FOREIGN KEY (`tid`) REFERENCES `test` (`tid`);

--
-- 限制表 `code`
--
ALTER TABLE `code`
  ADD CONSTRAINT `code_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `problem` (`pid`),
  ADD CONSTRAINT `code_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
