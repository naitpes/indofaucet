CREATE TABLE `sf_payouts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL DEFAULT '',
  `payout_amount` float NOT NULL,
  `payout_address` varchar(34) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
