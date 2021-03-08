-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 30 Ara 2020, 09:54:01
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `2017469055`
--

DELIMITER $$
--
-- Yordamlar
--
DROP PROCEDURE IF EXISTS `soru1`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `soru1` ()  NO SQL
SELECT takim.takim_adi, COUNT(sporcu.sporcu_id) as sporcu_sayisi
from sporcu,takim
WHERE sporcu.takim_id=takim.takim_id
GROUP BY takim.takim_adi$$

DROP PROCEDURE IF EXISTS `soru10`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `soru10` (IN `isim` VARCHAR(255))  NO SQL
SELECT CONCAT(sporcu.sporcu_adi,' ',sporcu.sporcu_soyadi) AS sporcu_ad_soyad, takim.takim_adi, gozlem.sut
FROM gozlem,takim,sporcu
WHERE takim.takim_id=sporcu.takim_id
AND gozlem.sporcu_id=sporcu.sporcu_id
AND takim.takim_adi LIKE concat('%',isim,'%')
ORDER BY gozlem.sut DESC
LIMIT 1$$

DROP PROCEDURE IF EXISTS `soru2`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `soru2` ()  NO SQL
SELECT ROUND(AVG(olcum.vucut_yag_orani)) AS ort_vucut_yag_orani
FROM sporcu, olcum, takim
WHERE sporcu.sporcu_id=olcum.sporcu_id$$

DROP PROCEDURE IF EXISTS `soru3`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `soru3` ()  NO SQL
SELECT CONCAT(sporcu.sporcu_adi, ' ',sporcu.sporcu_soyadi)AS sporcu_adi_soyadi, takim.takim_adi, sporcu.dogum_tarihi
FROM sporcu, takim
WHERE sporcu.takim_id=takim.takim_id
AND sporcu.dogum_tarihi=(SELECT MAX(sporcu.dogum_tarihi) FROM sporcu)$$

DROP PROCEDURE IF EXISTS `soru4`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `soru4` ()  NO SQL
SELECT CONCAT(sporcu.sporcu_adi,' ',sporcu.sporcu_soyadi)sporcu_adi_soyadi, olcum.agirlik
FROM sporcu LEFT JOIN olcum ON sporcu.sporcu_id=olcum.olcum_id
where olcum.agirlik> (SELECT round(avg(olcum.agirlik)) FROM olcum)$$

DROP PROCEDURE IF EXISTS `soru5`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `soru5` ()  NO SQL
SELECT CONCAT(sporcu.sporcu_adi,' ',sporcu.sporcu_soyadi) AS sporcu_ad_soyad, mevki.mevki_adi, gozlem.sut, takim.takim_adi
FROM takim LEFT JOIN sporcu ON takim.takim_id=sporcu.takim_id LEFT JOIN gozlem ON gozlem.sporcu_id=sporcu.sporcu_id LEFT JOIN mevki ON mevki.mevki_id=sporcu.mevki_id
WHERE gozlem.sut=(SELECT MAX(gozlem.sut)FROM gozlem)
AND mevki.mevki_adi= 'Uzun Forvet'$$

DROP PROCEDURE IF EXISTS `soru6`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `soru6` (IN `isim` VARCHAR(255))  NO SQL
SELECT CONCAT(sporcu.sporcu_adi,' ',sporcu.sporcu_soyadi) AS sporcu_adi_soyadi, takim.takim_adi
FROM takim LEFT JOIN sporcu ON sporcu.takim_id=takim.takim_id
WHERE takim.takim_adi LIKE concat('%',isim,'%')
ORDER BY sporcu.sporcu_adi$$

DROP PROCEDURE IF EXISTS `soru7`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `soru7` (IN `isim` VARCHAR(255))  NO SQL
SELECT concat(sporcu.sporcu_adi,' ', sporcu.sporcu_soyadi) AS sporcu_adi_soyadi, gozlem.sut,gozlem.pas,gozlem.dribbling
FROM gozlem LEFT JOIN sporcu ON gozlem.sporcu_id=sporcu.sporcu_id
WHERE sporcu.sporcu_adi LIKE CONCAT('%',isim,'%')$$

DROP PROCEDURE IF EXISTS `soru8`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `soru8` (IN `isim` VARCHAR(255))  NO SQL
SELECT  concat(sporcu.sporcu_adi,' ',sporcu.sporcu_soyadi) as sporcu_adi_soyadi, takim.takim_adi,sporcu.dogum_tarihi
FROM takim LEFT JOIN sporcu ON takim.takim_id=sporcu.takim_id 
WHERE takim.takim_adi LIKE CONCAT('%',isim,'%')
ORDER BY sporcu.dogum_tarihi DESC
LIMIT 1$$

DROP PROCEDURE IF EXISTS `soru9`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `soru9` (IN `isim` VARCHAR(255))  NO SQL
SELECT CONCAT(sporcu.sporcu_adi,' ',sporcu.sporcu_soyadi) AS sporcu_adi_soyadi, mevki.mevki_adi, olcum.hiz
FROM mevki LEFT JOIN sporcu on sporcu.mevki_id=mevki.mevki_id LEFT JOIN olcum ON olcum.sporcu_id=sporcu.sporcu_id
WHERE mevki.mevki_adi=isim
ORDER BY olcum.hiz DESC
LIMIT 1$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `kullanici_adi`, `sifre`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gozlem`
--

DROP TABLE IF EXISTS `gozlem`;
CREATE TABLE IF NOT EXISTS `gozlem` (
  `gozlem_id` int(11) NOT NULL AUTO_INCREMENT,
  `sporcu_id` int(11) NOT NULL,
  `sut` int(11) NOT NULL,
  `pas` int(11) NOT NULL,
  `dribbling` int(11) NOT NULL,
  PRIMARY KEY (`gozlem_id`),
  KEY `sporcu_id` (`sporcu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `gozlem`
--

INSERT INTO `gozlem` (`gozlem_id`, `sporcu_id`, `sut`, `pas`, `dribbling`) VALUES
(1, 3, 7, 8, 7),
(2, 8, 6, 7, 9),
(3, 13, 7, 6, 6),
(4, 18, 6, 8, 7),
(5, 23, 5, 8, 6),
(6, 28, 7, 6, 4),
(7, 33, 5, 7, 6),
(8, 4, 7, 6, 4),
(9, 9, 7, 6, 6),
(10, 14, 8, 4, 7),
(11, 19, 7, 5, 5),
(12, 24, 8, 7, 8),
(13, 29, 6, 6, 7),
(14, 34, 6, 7, 7),
(15, 5, 6, 6, 7),
(16, 10, 7, 6, 7),
(17, 15, 5, 7, 7),
(18, 20, 7, 6, 8),
(19, 25, 5, 5, 7),
(20, 30, 6, 5, 6),
(21, 35, 6, 6, 5),
(22, 6, 5, 6, 6),
(23, 11, 7, 4, 6),
(24, 16, 6, 5, 7),
(25, 21, 6, 7, 4),
(26, 26, 7, 6, 7),
(27, 31, 8, 7, 5),
(28, 36, 4, 6, 4),
(29, 7, 3, 6, 6),
(30, 12, 5, 7, 6),
(31, 17, 5, 6, 5),
(32, 22, 4, 4, 6),
(33, 27, 7, 6, 5),
(34, 32, 5, 4, 7),
(35, 37, 4, 3, 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mevki`
--

DROP TABLE IF EXISTS `mevki`;
CREATE TABLE IF NOT EXISTS `mevki` (
  `mevki_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mevki_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`mevki_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mevki`
--

INSERT INTO `mevki` (`mevki_adi`, `mevki_id`) VALUES
('Gard', 1),
('Şutör Gard', 2),
('Forvet', 3),
('Uzun Forvet', 4),
('Pivot', 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `olcum`
--

DROP TABLE IF EXISTS `olcum`;
CREATE TABLE IF NOT EXISTS `olcum` (
  `olcum_id` int(11) NOT NULL AUTO_INCREMENT,
  `sporcu_id` int(11) NOT NULL,
  `boy` float NOT NULL,
  `agirlik` float NOT NULL,
  `sicrama` float NOT NULL,
  `vucut_yag_orani` float NOT NULL,
  `beden_kitle_endeksi` float NOT NULL,
  `hiz` float NOT NULL,
  `reaksiyon_suresi` float NOT NULL,
  PRIMARY KEY (`olcum_id`),
  KEY `sporcu_id` (`sporcu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `olcum`
--

INSERT INTO `olcum` (`olcum_id`, `sporcu_id`, `boy`, `agirlik`, `sicrama`, `vucut_yag_orani`, `beden_kitle_endeksi`, `hiz`, `reaksiyon_suresi`) VALUES
(1, 3, 176, 65, 33, 11, 25, 8.13, 0.24),
(2, 8, 174, 63, 30, 11.5, 21.7, 8.5, 0.27),
(3, 13, 179, 70, 37, 14.3, 22.4, 8.75, 0.33),
(4, 18, 172, 64, 36, 14.6, 22.3, 8.91, 0.4),
(5, 23, 173, 70, 34, 17.2, 23.4, 8.12, 0.33),
(6, 28, 174, 61, 38, 13, 20.1, 9.1, 0.22),
(7, 33, 170, 66, 30, 18.4, 23.7, 8.55, 0.15),
(8, 4, 178, 70, 37, 13.4, 23, 8.65, 0.21),
(9, 9, 173, 67, 29, 14.2, 21.3, 8.12, 0.24),
(10, 14, 176, 70, 31, 17.5, 21.4, 7.89, 0.23),
(11, 19, 172, 65, 27, 14.1, 21, 7.75, 0.27),
(12, 24, 175, 71, 30, 15, 22.3, 7.71, 0.27),
(13, 29, 174, 67, 31, 13.8, 21.6, 7.58, 0.26),
(14, 34, 176, 75, 24, 17, 23.1, 7.3, 0.29),
(15, 5, 178, 72, 34, 16.7, 22.7, 7.73, 0.23),
(16, 10, 178, 74, 31, 17.6, 24.1, 7.45, 0.26),
(17, 15, 180, 71, 35, 12.3, 21.7, 7.76, 0.23),
(18, 20, 180, 74, 31, 16.3, 24.2, 7.56, 0.28),
(19, 25, 181, 76, 37, 19.1, 21.3, 7.84, 0.3),
(20, 30, 179, 76, 34, 17.6, 23.4, 7.54, 0.28),
(21, 35, 176, 75, 31, 18.8, 23.9, 7.41, 0.24),
(22, 6, 184, 78, 36, 14.7, 23.7, 7.25, 0.27),
(23, 11, 180, 73, 34, 17.5, 21.4, 7.33, 0.29),
(24, 16, 184, 76, 32, 13.4, 20.8, 7.67, 0.26),
(25, 21, 185, 80, 33, 16.4, 21.6, 7.4, 0.24),
(26, 26, 183, 77, 38, 15.7, 22.1, 7.34, 0.28),
(27, 31, 186, 81, 35, 18.4, 22.5, 7.19, 0.26),
(28, 36, 182, 79, 32, 15.9, 22.8, 7.47, 0.23),
(29, 7, 191, 93, 34, 20.4, 24.8, 6.89, 0.31),
(30, 12, 194, 86, 34, 17.8, 21.6, 6.99, 0.34),
(31, 17, 189, 81, 38, 13.7, 22.1, 6.78, 0.31),
(32, 22, 187, 80, 35, 17.4, 21.4, 6.59, 0.29),
(33, 27, 186, 79, 36, 13.2, 23.6, 6.71, 0.27),
(34, 32, 194, 88, 31, 19.1, 24.2, 6.59, 0.31),
(35, 37, 192, 86, 35, 19, 23.3, 6.75, 0.29);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sporcu`
--

DROP TABLE IF EXISTS `sporcu`;
CREATE TABLE IF NOT EXISTS `sporcu` (
  `sporcu_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sporcu_soyadi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `dogum_tarihi` date NOT NULL,
  `sporcu_id` int(11) NOT NULL AUTO_INCREMENT,
  `mevki_id` int(11) NOT NULL,
  `takim_id` int(11) NOT NULL,
  PRIMARY KEY (`sporcu_id`),
  KEY `mevki_id` (`mevki_id`),
  KEY `takim_id` (`takim_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sporcu`
--

INSERT INTO `sporcu` (`sporcu_adi`, `sporcu_soyadi`, `dogum_tarihi`, `sporcu_id`, `mevki_id`, `takim_id`) VALUES
('Yiğit', 'Yaman', '2005-12-15', 3, 1, 2),
('Samet', 'Erdinç', '2005-05-10', 4, 2, 2),
('Alp', 'Karahan', '2005-06-27', 5, 3, 2),
('Salih', 'Kılıç', '2005-01-19', 6, 4, 2),
('Bora', 'Işık', '2005-03-11', 7, 5, 2),
('Ömer Alp', 'Doğulu', '2005-10-30', 8, 1, 1),
('Mustafa', 'Topçu', '2005-09-01', 9, 2, 1),
('Erdem', 'Kılınç', '2005-07-23', 10, 3, 1),
('Emirhan', 'Demir', '2005-11-12', 11, 4, 1),
('Bora Can', 'Karahan', '2005-03-07', 12, 5, 1),
('Faruk', 'Solak', '2005-10-21', 13, 1, 3),
('Yunus Emre', 'Yıldırım', '2005-04-13', 14, 2, 3),
('Efecan', 'Demir', '2005-05-30', 15, 3, 3),
('Burak', 'Dağlı', '2005-07-21', 16, 4, 3),
('Semih', 'Yurt', '2005-08-10', 17, 5, 3),
('Serdar', 'Taşçı', '2005-01-23', 18, 1, 4),
('Batuhan', 'Cansever', '2005-06-03', 19, 2, 4),
('Serhat', 'Eren', '2005-05-14', 20, 3, 4),
('Can', 'Altındağ', '2005-08-22', 21, 4, 4),
('Haluk', 'Çetin', '2005-09-07', 22, 5, 4),
('Furkan', 'Tunç', '2005-02-16', 23, 1, 5),
('Uğur Alp', 'Işık', '2005-04-19', 24, 2, 5),
('Murat', 'Günhan', '2005-08-11', 25, 3, 5),
('Mert', 'Çetin', '2005-05-20', 26, 4, 5),
('Ömercan', 'Işık', '2005-07-13', 27, 5, 5),
('Doğan', 'Güldal', '2005-12-06', 28, 1, 6),
('Batuhan', 'Aydın', '2005-04-27', 29, 2, 6),
('Ersin', 'Tekdemir', '2005-08-13', 30, 3, 6),
('Abdullah', 'Karaca', '2005-01-14', 31, 4, 6),
('Denizcan', 'Serter', '2005-10-22', 32, 5, 6),
('Barbaros', 'Ercan', '2005-05-14', 33, 1, 7),
('Güneş', 'Küçük', '2005-08-17', 34, 2, 7),
('Evren', 'Yaşar', '2005-07-19', 35, 3, 7),
('Hasan', 'Tekin', '2005-08-15', 36, 4, 7),
('Berkay', 'Güney', '2005-03-11', 37, 5, 7);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `takim`
--

DROP TABLE IF EXISTS `takim`;
CREATE TABLE IF NOT EXISTS `takim` (
  `takim_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `takim_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`takim_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `takim`
--

INSERT INTO `takim` (`takim_adi`, `takim_id`) VALUES
('Karşıyaka', 1),
('Anadolu Efes', 2),
('Türk Telekom', 3),
('Bahçeşehir', 4),
('Bandırma', 5),
('Tofaş', 6),
('İzmir BŞB', 7);

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `gozlem`
--
ALTER TABLE `gozlem`
  ADD CONSTRAINT `gozlem_ibfk_1` FOREIGN KEY (`sporcu_id`) REFERENCES `sporcu` (`sporcu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `olcum`
--
ALTER TABLE `olcum`
  ADD CONSTRAINT `olcum_ibfk_1` FOREIGN KEY (`sporcu_id`) REFERENCES `sporcu` (`sporcu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `sporcu`
--
ALTER TABLE `sporcu`
  ADD CONSTRAINT `sporcu_ibfk_1` FOREIGN KEY (`mevki_id`) REFERENCES `mevki` (`mevki_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sporcu_ibfk_2` FOREIGN KEY (`takim_id`) REFERENCES `takim` (`takim_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
