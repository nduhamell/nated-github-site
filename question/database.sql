CREATE TABLE IF NOT EXISTS `questions` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `question` varchar(50) NOT NULL,
 `trn_date` datetime NOT NULL,
 PRIMARY KEY (`id`)
 );