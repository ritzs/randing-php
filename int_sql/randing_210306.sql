-- --------------------------------------------------------
-- 호스트:                          127.0.0.1
-- 서버 버전:                        10.1.9-MariaDB - mariadb.org binary distribution
-- 서버 OS:                        Win64
-- HeidiSQL 버전:                  11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- 테이블 fasttrain.request_randing 구조 내보내기
CREATE TABLE IF NOT EXISTS `request_randing` (
  `rr_request_randingseq` int(11) NOT NULL AUTO_INCREMENT COMMENT '인덱스',
  `rr_asking` varchar(255) DEFAULT NULL COMMENT '질문답',
  `rr_info_sort` enum('A','B','C') DEFAULT NULL COMMENT '''A:보장분석'',''B:리모델링'',''C:신규가입''',
  `rr_info_name` varchar(255) DEFAULT NULL COMMENT '이름',
  `rr_info_phone` varchar(20) DEFAULT NULL COMMENT '연락처',
  `rr_info_age` varchar(10) DEFAULT NULL COMMENT '나이',
  `rr_info_area` varchar(255) DEFAULT NULL COMMENT '지역',
  `rr_date` datetime DEFAULT CURRENT_TIMESTAMP COMMENT '등록일',
  PRIMARY KEY (`rr_seq`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- 내보낼 데이터가 선택되어 있지 않습니다.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
